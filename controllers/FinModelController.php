<?php

namespace app\controllers;

use app\models\Area;
use app\models\FinModel;
use app\models\forms\FinModelForm;
use app\models\search\FinModel as FinModelSearch;
use app\models\Sort;
use yii\data\ArrayDataProvider;
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
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
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
    public function actionView($id, $sort_id, $area_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $sort_id, $area_id),
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
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id, 'sort_id' => $model->sort_id, 'area_id' => $model->area_id]);
            }
        } else {
            $model->loadDefaultValues();
        }
        return $this->render('create', [
            'model' => $model,
            'sort_id' => $sort_id
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
                        $result = 2;
                    } 
                    return $this->render('start', ['model' => $model, 'result' => $result, 'dataProvider' => $dataProvider]);
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
    public function actionUpdate($id, $sort_id, $area_id)
    {
        $model = $this->findModel($id, $sort_id, $area_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'sort_id' => $model->sort_id, 'area_id' => $model->area_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing FinModel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @param int $sort_id Sort ID
     * @param int $area_id Area ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $sort_id, $area_id)
    {
        $this->findModel($id, $sort_id, $area_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FinModel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @param int $sort_id Sort ID
     * @param int $area_id Area ID
     * @return FinModel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $sort_id, $area_id)
    {
        if (($model = FinModel::findOne(['id' => $id, 'sort_id' => $sort_id, 'area_id' => $area_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
