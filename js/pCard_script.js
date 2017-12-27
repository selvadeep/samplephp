/*global $, console*/

$(function () {
   
    'use strict';
    
    $('.cardOne').click(function () {
        $('.cardOne').toggleClass('pCard_on');
        $('.cardOne i').toggleClass('fa-minus');
    });
    
    $('.cardTwo').click(function () {
        $('.cardTwo').toggleClass('pCard_on');
        $('.cardTwo i').toggleClass('fa-minus');
    });
    
    $('.cardThree').click(function () {
        $('.cardThree').toggleClass('pCard_on');
        $('.cardThree i').toggleClass('fa-minus');
    });

});