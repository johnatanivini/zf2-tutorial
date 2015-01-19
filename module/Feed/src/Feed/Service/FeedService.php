<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Feed\Service;

/**
 * Description of FeedService
 *
 * @author ivini
 */
class FeedService {
    public function  getFeeds(){
       $feed = \Zend\Feed\Reader\Reader::import("http://feeds.feedburner.com/NoticiasINFO-TI?format=xml");
       return $feed;
    }
}
