<?php



class PagesController
{
    public function home()
    {
        $db = App::get('database');

        $tasks = $db->selectAll('todos');
        
        return view('index', compact('tasks'));
    }
    public function about()
    {
        $me = "Gareth Devs";

        return view('about',compact('me'));
    }
    public function contact()
    {
        return view('contact');
    }
    public function about_culture()
    {
        return view('about-culture');
    }
    public function addTask()
    {
        $task = new Task($_POST['description']);
        $values = ['description' => $task->description, 'completed' => $task->completed];
        $db = App::get('database');
        $db->insert('todos',$values);
        return redirect('');
    }
}