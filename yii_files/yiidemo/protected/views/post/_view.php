    <div id="list_cntntbg2">
      <div id="list_title2"><?php echo CHtml::link(CHtml::encode($data->subject), array('view', 'id'=>$data->id)); ?></div>
      <div id="list_mid2">Open</div>
      <div id="list_large2"><?php $category=Category::model()->find('id='.$data->category_id); echo $category->name;//echo CHtml::encode($data->category_id); ?></div>
      <div id="list_mid2"><?php
            $date1=mktime(0, 0, 0,date('m'),date('d'),date('Y'));
            $Ddate=explode(' ',$data->createdon);
            $Edate=explode('-',$Ddate[0]);
            $date2=mktime(0,0,0,$Edate[1],$Edate[2],$Edate[0]);
            $dateDiff = $date1 - $date2;
            $fullDays = floor($dateDiff/(60*60*24));
            if($fullDays==0)
            {
                $age="Today";
            }
            else if ($fullDays==1)
            {
                $age=$fullDays." Day";
            }
            else
            {$age=$fullDays." Days";}
            echo $age;
          ?>
          </div>
      <!-- <div id="list_small2">20</div>-->
      <div id="list_mid2"><?php $count=Comment::model()->count('post_id='.$data->id); echo $count;?></div>
     <!-- <div id="list_large2"></div>-->
    </div>