function start() {
    exercise1();
    
    buttonID.addEventListener("click",exercise2,false);
    
    exercise3();
    
    document.getElementById("size-12").addEventListener("click",size12,false);
    document.getElementById("size-14").addEventListener("click",size14,false);
    document.getElementById("size-16").addEventListener("click",size16,false);
}




//EXERCISE 1**************************************************EXERCISE 1
function exercise1() {
    var myLinks =
    [
        'http://bing.com/search?q=go',
        'http://bing.com/search?q=visit',
        'http://bing.com/search?q=explore',
        'http://bing.com/search?q=funny'
    ];
    
    for (var i=0; i<myLinks.length; i++)
    {
        document.getElementById("l"+i).getElementsByTagName("a")[0].addEventListener("click",function(idx)
        {
            idx = i;
            return function()
            {
                window.location.href = myLinks[idx];
                return false;
            };
        }(i),false);
    }
}
//EXERCISE 1**************************************************EXERCISE 1




//EXERCISE 2**************************************************EXERCISE 2
var buttonID = document.getElementById('increase');
var message = document.getElementById('message');

var count = (function()
            {
                var counter = 1;
                return function (){return counter++;}
            })();

function exercise2()
{
    message.innerHTML = "You have clicked the button " + count() + " time(s)!";
}
//EXERCISE 2**************************************************EXERCISE 2




//EXERCISE 3**************************************************EXERCISE 3
function exercise3()
{
    var things = ['foo', 'bar', 'bat', 'baz', 'bang'];
    var target = document.getElementById('target');
    var button;
    
    for (var i = 0; i < things.length; i++)
    {
        button = document.createElement('input');
        button.type = 'button';
        button.value = things[i];
        button.addEventListener("click",function(index)
        {
            return function()
            {
                document.getElementById("resulttext").innerHTML = things[index];
            };
        }(i),false);
        target.appendChild(button);
    }
}
//EXERCISE 3**************************************************EXERCISE 3




//EXERCISE 4**************************************************EXERCISE 4
var size12 = exercise4(12);
var size14 = exercise4(14);
var size16 = exercise4(16);

function exercise4(size)
{
    return function()
    {
        document.getElementById("text").style.fontSize = size + 'px';
    };
}
//EXERCISE 4**************************************************EXERCISE 4


window.addEventListener("load",start,false);