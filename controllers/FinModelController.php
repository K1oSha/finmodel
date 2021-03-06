<?php

namespace app\controllers;

use app\models\Area;
use app\models\Cultura;
use app\models\Expense;
use app\models\FinModel;
use app\models\forms\FinModelForm;
use app\models\forms\FinUpdateForm;
use app\models\search\FinModel as FinModelSearch;
use app\models\Sort;
use kartik\mpdf\Pdf;
use Mpdf\Mpdf;
use Yii;
use yii\data\ArrayDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FinModelController implements the CRUD actions for FinModel model.
 */
class FinModelController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['index', 'update', 'delete', 'view'],
                'rules' => [
                    [
                        'actions' => ['index', 'update', 'delete', 'view'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Lists all FinModel models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FinModelSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FinModel model.
     * @param int $id ID
     * @param int $sort_id Sort ID
     * @param int $area_id Area ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $expenses = Expense::find()->where(['fin_model_id' => $id])->all();
        return $this->render('view', [
            'model' => $this->findModel($id),
            'expenses' => $expenses
        ]);
    }

    /**
     * Creates a new FinModel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($sort_id)
    {
        $model = new FinModel();
        $model->sort_id = $sort_id;
        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->validate())
            {
                $model->save();
                $sort = Sort::findOne($model->sort_id);
                $total_profit = ($sort->profit / 10) * $sort->price * $model->area;
                $model->exp_9 = $total_profit / 3;
                $model->exp_10 = $total_profit / 3;
                $model->exp_11 = $total_profit / 3;
                $expense = new Expense();
                $expense->name = "???????????????????? ??????????";
                for ($i = 1; $i <=12; $i++) { 
                    $exp_var_name = 'exp_' . $i; 
                    $expense->{$exp_var_name} = 15000;
                }
                $expense->exp_4 = 40000 * 3;
                $expense->exp_5 = 40000 * 3;
                $expense->price = 0;
                $expense->fin_model_id = $model->id;
                $expense->save();
                $expense = new Expense();
                $expense->name = "?????????????? AXION 950-920";
                for ($i = 1; $i <=12; $i++) { 
                    $exp_var_name = 'exp_' . $i; 
                    $expense->{$exp_var_name} = 6000;
                }
                $expense->price = 10000000;
                $expense->in_stock = 1;
                $expense->fin_model_id = $model->id;
                $expense->save();
                $expense = new Expense();
                $expense->name = "????????";
                for ($i = 4; $i <=9; $i++) { 
                    $exp_var_name = 'exp_' . $i; 
                    $expense->{$exp_var_name} = 3 * $model->area * $model->water_price;
                }
                $expense->fin_model_id = $model->id;
                $expense->price = 0;
                $expense->save();
                $expense = new Expense();
                $expense->name = "??????????????????????????";
                for ($i = 1; $i <=12; $i++) { 
                    $exp_var_name = 'exp_' . $i; 
                    $expense->{$exp_var_name} = 600 * $model->electro_price;
                }
                for ($i = 1; $i <= 3; $i++) { 
                    $exp_var_name = 'exp_' . $i; 
                    $expense->{$exp_var_name} = 300 * $model->electro_price;
                }
                for ($i = 9; $i <=12; $i++) { 
                    $exp_var_name = 'exp_' . $i; 
                    $expense->{$exp_var_name} = 600 * $model->electro_price;
                }
                $expense->fin_model_id = $model->id;
                $expense->price = 0;
                $expense->save();
                $expense = new Expense();
                $expense->name = "????????????????????????";
                $total = 5 * 10000 * $model->area;
                for ($i = 4; $i <=5; $i++) { 
                    $exp_var_name = 'exp_' . $i; 
                    $expense->{$exp_var_name} = $total / 2;
                }
                $expense->fin_model_id = $model->id;
                $expense->price = 0;
                $expense->save();
                $model->save();
                if ($model->save()) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }

        }

        return $this->render('create', [
            'model' => $model,
            'sort_id' => $sort_id
        ]);
    }

    public function actionGetPdf($id) {
        $model = FinModel::findOne($id);
        $expenses = Expense::find()->where(['fin_model_id' => $id])->all();
        $mpdf= new Mpdf();
        $mpdf->autoScriptToLang = true;
        $mpdf->autoLangToFont = true;
        ob_start();
        require '../views/fin-model/pdf.php';
        $html = ob_get_clean();
        $mpdf->WriteHTML($html);
        $mpdf->Output();
        exit();
        return $pdf->render();
    }

    public function actionUpdateIncome($id) 
    {
        $model = new FinUpdateForm();
        $originModel = FinModel::findOne($id);
        $model->setAttributes($originModel->attributes);
        if ($this->request->isPost && $model->load($this->request->post())) {
            for ($i = 1; $i <=12; $i++) { 
                $exp_var_name = 'exp_' . $i; 
                $prib_var_name = 'prib_' . $i; 
                $originModel->{$exp_var_name} = $model->{$exp_var_name};
                $originModel->{$prib_var_name} = $model->{$prib_var_name};
            }
            $originModel->save();
            return $this->redirect(['view', 'id' => $id]);
        }

        return $this->render('update-income', [
            'model' => $model,
            'id' => $id
        ]);
    }

    public function actionStart()
    {
        $model = new FinModelForm();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                if ($model->validate())
                {
                    $area = Area::findOne($model->area_id);
                    if ($model->cultura_id == $area->cultura_id) {
                        $dataProvider = new ArrayDataProvider([
                            'allModels' => Sort::find()->where(['cultura_id' => $model->cultura_id])->all()
                        ]);
                        $result = 1;
                    } else {
                        $dataProvider = new ArrayDataProvider([
                            'allModels' => Sort::find()->where(['cultura_id' => $area->cultura_id])->all()
                        ]);
                        $dataProvider2 = new ArrayDataProvider([
                            'allModels' => Sort::find()->where(['cultura_id' => $model->cultura_id])->all()
                        ]); 
                        $result = 2;
                    } 
                    return $this->render('start', ['model' => $model, 'result' => $result, 'dataProvider' => $dataProvider, 'dataProvider2' => $dataProvider2]);
                }
            }
        }
        return $this->render('start', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing FinModel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @param int $sort_id Sort ID
     * @param int $area_id Area ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing FinModel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionCapital($id)
    {
        $arrayCapital = Expense::find()->where(['in_stock' => 1, 'fin_model_id' => $id])->all();
        $dataProvider = new ArrayDataProvider(['allModels' => $arrayCapital]);
        $itogo = 0;

        foreach ($arrayCapital as $one)
            $itogo+=$one->price;

        return $this->render('capital', [
            'itogo' => $itogo,
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionEconomy($id)
    {
        $model = $this->findModel($id);
        $sort = Sort::findOne($model->sort_id);
        $cultura = Cultura::findOne($sort->cultura_id);
        $nameCulturi = $cultura->name.' "'.$sort->name.'"';
        $averangePrice = 66;
        $priceFromRossStat = 35;

        return $this->render('economy', [
            'nameCulturi' => $nameCulturi,
            'averangePrice' => $averangePrice,
            'priceFromRossStat' => $priceFromRossStat,
        ]);
    }

    /**
     * Finds the FinModel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return FinModel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = FinModel::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
