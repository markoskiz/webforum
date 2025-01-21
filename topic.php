<?php require('core/init.php'); ?>
<?php 
$topic = new Topic;

$topic_id = $_GET['id'];

if(isset($_POST['do_reply'])){
    $data=array();
    $data['topic_id'] = $topic_id;
    $data['body'] = $_POST['body'];
    $data['user_id'] = getUser()['user_id'];
    
    $validate = new Validator;
    $field_array = array('body');
    
    if($validate->isRequired($field_array)){
        if($topic->reply($data)){
            redirect('topic.php?id='.$topic_id,'Your reply has been posted','success');
        } else {
            redirect('topic.php?id='.$topic_id,'Reply not posted. Something went wrong','error');
        }
    } else {
        redirect('topic.php?id='.$topic_id,'Reply not posted. Message must not be empty','error');
    }
}

$template = new Template('templates/topic.php');


$template->topic = $topic->getTopic($topic_id);
$template->replies = $topic->getReplies($topic_id);
$template->title = $topic->gettopic($topic_id)['title'];

echo $template;

?>