<?php

class PostController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */

	public function actionView($id)
	{
        $post=$this->loadModel($id);
		$comment=$this->newComment($post);
        $question=Question::model()->find('post_id='.$post->id);
        $answer=Answer::model()->findAll('question_id='.$question->id);
        print_r($_POST['Question']);
        $this->render('view',array(
			'model'=>$post,
            'comment'=>$comment,
            'question'=>$question,
            'answer'=>$answer,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Post;
        $modelq= new Question;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Post']))
		{
			$model->attributes=$_POST['Post'];
            //print_r($model->attributes); exit;
			if($model->save())
            {
                //echo $_POST['Post']; exit;
               if ($_POST['Post']['havequestion']=='1')
               {
                    $post_id=$model->getPrimaryKey();
                    $user_id='1';
                   //print_r($modelq); exit;
                    //$question = array();
                   // $modelq=array('id'=>NULL,'post_id'=>$model->getPrimaryKey(),'user_id'=>'','question'=>$_POST['Post']['question'],'type'=>$_POST['Post']['type']);
                   /* $question['attributes']['post_id']= $model->getPrimaryKey();
                    $question['attributes']['user_id']='';
                    $question['attributes']['question']=$_POST['Post']['question'];
                    $question['attributes']['type']=$_POST['Post']['type'];*/
                    //$modelq->save();
                   
                    $connection = CActiveRecord::getDbConnection();

                    $sql="INSERT INTO question (post_id, user_id,question,type) VALUES (:post_id,:user_id,:question,:type)";
                    $command=$connection->createCommand($sql);
                    $command->bindParam(":post_id",$post_id,PDO::PARAM_STR);
                    $command->bindParam(":user_id",$user_id,PDO::PARAM_STR);
                    $command->bindParam(":question",$_POST['Post']['question'],PDO::PARAM_STR);
                    $command->bindParam(":type",$_POST['Post']['type'],PDO::PARAM_STR);
                    if ($command->execute())
                    {
                        $question_id =Yii::app()->db->getLastInsertId();
                        $sql2="INSERT INTO answer (question_id, answer) VALUES (:question_id,:answer)";
                        $command2=$connection->createCommand($sql2);
                        $command2->bindParam(":question_id",$question_id,PDO::PARAM_STR);
                        $command2->bindParam(":answer",$_POST['Post']['answer1'],PDO::PARAM_STR);
                        $command2->execute();
                        $command2->bindParam(":question_id",$question_id,PDO::PARAM_STR);
                        $command2->bindParam(":answer",$_POST['Post']['answer2'],PDO::PARAM_STR);
                        $command2->execute();
                        $command2->bindParam(":question_id",$question_id,PDO::PARAM_STR);
                        $command2->bindParam(":answer",$_POST['Post']['answer3'],PDO::PARAM_STR);
                        $command2->execute();
                    }

               }
				$this->redirect(array('view','id'=>$model->id));
            }
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Post']))
		{
			$model->attributes=$_POST['Post'];
			if($model->save())
                
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Post');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Post('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Post']))
			$model->attributes=$_GET['Post'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Post::model()->findByPk((int)$id);

		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
    protected function newComment($post)
        {
            $comment=new Comment;
            if(isset($_POST['ajax']) && $_POST['ajax']==='comment-form')
            {
                echo CActiveForm::validate($comment);
                Yii::app()->end();
            }
            if(isset($_POST['Comment']))
            {
                $comment->attributes=$_POST['Comment'];
                
                if($post->addComment($comment))
                {
                    
                        Yii::app()->user->setFlash('commentSubmitted','Thank you for your comment. Your comment will be posted once it is approved.');
                    $this->refresh();
                }
            }
            return $comment;
        }
	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='post-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
