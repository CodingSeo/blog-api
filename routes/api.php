<?php

use App\Entities\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Documentation;
use \Doctrine\ORM\EntityManagerInterface;
use LaravelDoctrine\ORM\Facades\EntityManager;

use Doctrine\ORM\Event\LoadClassMetadataEventArgs;


Route::get('/test', [Documentation::class, 'test']);

Route::get('test-add', function(EntityManagerInterface $em){
    $task = new Task('Make test app','Creat the test application for the sitepoint ariticle.');
    $em->persist($task);
    $em->flush();

    return 'added!';
});

Route::get('test-find', function(EntityManagerInterface $em){
    $task = $em->getRepository(Task::class)->findAll();
    return $task;
});

Route::get('test-find', function(EntityManagerInterface $em){
    $task = $em->getRepository(Task::class)->findAll();
    return $task;
});


