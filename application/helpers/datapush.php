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
               $data .=    '<div class="caption">
                            <h3><?php echo word_wrap($item->title, 20) ?></h3>
                            
                            <p><?php echo $item->description ?></p>
                            
                            <p>
                                <a class="btn btn-primary" href="<?php echo site_url(array("item", "view", $item->id));?>" role="button">
                                    <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                                    Details
                                </a>
                            </p>
                            </div>';
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
