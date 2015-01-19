<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Feed\Controller;

/**
 * Description of FeedController
 *
 * @author ivini
 */
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class FeedController extends AbstractActionController{
    
    public function indexAction() {
        $feedService = $this->getServiceLocator()->get('Feed\Service\FeedService');
        $feed = $feedService->getFeeds();
        
        return new ViewModel(['feed'=>$feed]);
    }
    
}
