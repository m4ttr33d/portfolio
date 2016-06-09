/*
angular.module('portfolio', []).controller('portfolioController', function($scope)
{
  $scope.major = 'Information Technology';
  $scope.minor = 'Digital Business';
  $scope.concentration = 'Database and Data Application Programming';
  $scope.projected = 'May 2017';
}); //end scope
*/


var i=1;
function changeBackground()
{
	if(i<10)
	{
		document.getElementById("homeSection").style.backgroundImage = "url('img/background"+i+".jpeg')";
		i++;
	}
	else
	{
		i=1;
	}	
}


function init()
{
	//console.log("Page Loaded");
	
	//Initialize the Fullpage.js plugin
	$(document).ready(function()
	{
		$('#fullpage').fullpage({
		//Menu and navigation
		anchors:['home','who', 'skills',//'projects',
		'jobs','resume'],
		menu: '#menu',
		css3: true,
		scrollingSpeed: 850
		});

		//Down the road, grab the words and the weights from the database
		//The array runs the query and adds to the array
		
		var languages = [
		{ text: "Java",weight:13},
		{ text: "C#",weight:11},
		{ text: "HTML",weight:11},
		{ text: "CSS",weight:11},
		{ text: "AngularJS",weight:9},
		{ text: "MongoDB",weight:9},
		{ text: "MySQL",weight:9},
		{ text: "PHP",weight:8},
		{ text: "JavaScript",weight:11},
		{ text: "Bootstrap",weight:7},
		{ text: "ColdFusion",weight:7},
		{ text: "XML",weight:9},
		{ text: "SQL Server",weight:5},
		{ text: "Node.js",weight:6},
		{ text: "Mac OS",weight:6},
		{ text: "Windows",weight:6},
		{ text: "Linux",weight:5},
		{ text: "iOS",weight:6},
		{ text: "Android",weight:7},
		{ text: "Microsoft Office",weight:3},
		{ text: "RESTful Services",weight:3},
		{ text: "SOAP",weight:3}];
		/*
		var hobbies = [ 
		{ text: "Cars",weight:13},
		{ text: "Photography",weight:11.5, link: "photos.matthewreed.tech/"},
		{ text: "Computer Building",weight:7},
		{ text: "Skiing",weight:5},
		{ text: "Golf",weight:5}
		];
		$('#languageCloud').jQCloud(hobbies, {
		  classPattern: null,
		  colors: ["#800026", "#bd0026", "#e31a1c", "#fc4e2a", "#fd8d3c", "#feb24c", "#fed976", "#ffeda0", "#ffffcc"],
		});
		*/
	  var some_words_with_same_weight =
	    $("#languageCloud").jQCloud(languages, {
	      width: 750,
	      height: 500
	    });
	}); //end function
} //end init()


