<?php
date_default_timezone_set("America/Los_Angeles");

class Blog {
	public $title;
	public $description;
    
    private $content = [];
    
	public function __construct($title, $description){
		$this->title = $title;
		$this->description = $description;
	}
    
    public function addContent($content)
    {
        $this->content[] = (object) [
            'title' => $content['title'],
            'dateline' => $this->parseDate($content['dateline']),
            'content' => $this->parseContent($content['content'])
        ];
    }
    
    public function parseContent($post)
    {
        // http://php.net/manual/en/function.preg-replace.php
        $badWords = [
            '/fuck/', '/bitch/',
            '/whore/', '/ass/',
            '/tits/', '/nigger/',
            '/fucker/', '/vagina/',
            '/penis/', '/nigga/'  
        ];
        return preg_filter($badWords, '*****', $post);    
    }
    
    public function parseDate($timestamp)
    {
        // http://php.net/manual/en/function.date.php
        return date("F j, Y, g:i a", $timestamp); 
    }
    
    public function getAll()
    {
        return (object) $this->content;    
    }
}
/*
Posts{
	Content{
		Fonts
		Color
		Censoring
		Images
	}
	

}
*/