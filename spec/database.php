<?php

namespace spec;

use RuntimeException;
use PHPSpec2\ObjectBehavior;

class database extends ObjectBehavior {

    public function it_should_be_initializable(){
        $this->shouldHaveType('database');
    }

    public function it_should_be_an_instance_of_database(){
        $this->shouldHaveType('database');
    }

    public function it_should_be_no_other_type_of_object(){
        $this->shouldNotHaveType('other');
    }

    public function it_should_create_database(){
    	$this->query('create database test;');
    }

	public function it_should_select_a_database(){
    	$this->query('use test;');
    }

    public function it_should_handle_simple_queries(){
    	$this->query("create table users (personid int(50) not null auto_increment primary key,
    									  firstname varchar(35),middlename varchar(50),
    									  lastname varchar(50) default 'bato');");
    }

    public function it_should_drop_database(){
    	$this->query('drop database test;');
    }
}