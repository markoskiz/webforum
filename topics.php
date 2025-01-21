<?php require('core/init.php'); ?>
<?php 
$topic = new Topic;

$template = new Template('templates/frontpage.php');

$category = isset($_GET['category']) ? $_GET['category']:null;
$user_id = isset($_GET['user']) ? $_GET['user']:null;


$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();

if (isset($category)){
    $template->topics = $topic->getByCategory($category);
    $template->title = 'Posts in "'.$topic->getCategory($category)['name'].'"';
} 
if (isset($user_id)){
    $template->topics = $topic->getByUser($user_id);
} 

if (!isset($category) && !isset($user_id)) {
    $template->topics = $topic->getAllTopics();
}

echo $template;

?>