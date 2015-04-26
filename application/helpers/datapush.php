<?php

    
$this->load->model('item_model'); 
if(isset($_POST['timestamp']))
{
    $timestamp=$this->input->post('timestamp');
    $timeout=20;
    $time_between_queries=5;
    $counter=0;
    $data=""
    while(true){

        if($counter*$time_between_queries>$timeout){
            break;
        }
        $counter++;

        $newitems=$this->item_model->get_join_new($timestamp);
        $newtimes=$this->item_model->get_time($timestamp);
        if(count($newitems)>0){
            foreach($newtimes as $time){
                $timestamp=$time;
                break;
            }
            foreach($newitems as $item){
               $data .=$item;
            }


            break;

        }
        else{
            sleep($time_between_queries);
        }
    }
    $json = json_encode(array('content'=>$data,'timestamp'=>$timestamp));
    echo $json;
}

?>
