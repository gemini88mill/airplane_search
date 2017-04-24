/**
 * Created by raphael on 4/23/17.
 */



$(document).ready(function() {


    var numberOfpages = 3;  //Change to number of pages you have

    //This hides all pages except the start at page
    var startAtPage = 0;  //Change to page # you want to start at || DEFAULT = 0;
    for(var i=0;i < numberOfpages+1;i++)
    {
        var fielder = "#page"+i;
        if(i == startAtPage)
        {
            //do nothing
            $(fielder).toggleClass('pages start-page');;
        }
        else{

            $(fielder).hide();
        }
    }


    //Thanks goes out to TrazeK on stack overflow for assistance on this
    $('.forward').click(function() {
        $this = $(this);
        flipPage($this.data('current'), $this.data('next'));
    });
    $('.back').click(function() {
        $this = $(this);
        flipBack($this.data('current'), $this.data('back'));
    });


    //Slides  to the left for going to next page
    function flipPage(fromPage,toPage)
    {
        var fromPage = "#page"+ fromPage;
        var toPage = "#page"+ toPage;


        // v  Changes animaton duration
        $(fromPage).animate({left: '-150%'}, 500, function() {
            $(fromPage).hide();
            $(toPage).animate({left: '20%'},200, function(){}).show();
        });

    }

    //slides to the right, for going back a page
    function flipBack(fromPage,toPage)
    {
        var fromPage = "#page"+ fromPage;
        var toPage = "#page"+ toPage;

        $(fromPage).animate({left: '150%'}, 500, function() {
            $(fromPage).hide();
            $(toPage).animate({left: '20%'},200, function(){}).show();
        });
    }
});