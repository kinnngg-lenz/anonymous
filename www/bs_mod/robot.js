/*function ques () { */var ten=10;
	var num=1;
	var sqrt= Math.sqrt;
	var numerator=0, denomrator=0;
	for (num=1; num<=99; num++)
	{
		numerator += sqrt(10 + sqrt(num));
		document.write("<p>" + numerator + " numerator value of I is" + num +  "</p>" + "<br>");
		denomrator += sqrt(10 - sqrt(num));
		document.write("<p>" + denomrator + " denomrator value of I is" + num +  "</p>" + "<br>");
	}

	console.log("the value of num is " + numerator);
	console.log("the value of denom is " + denomrator);

	var ans= numerator / denomrator;

	console.log("the value of ans is " + ans);

	var opt = ["1 + sqrt(2)", "sqrt(20)",  "2 * sqrt(10)", "2 + sqrt(10)"];
	var opt1 = [1 + sqrt(2), sqrt(20),  2 * sqrt(10), 2 + sqrt(10)];
	for(var i=0; i<=opt.length; i++)
	{
		document.write("<p>" + opt[i] + "=" + opt1[i] +  "</p>" + "<br>")
		if(Math.round(opt1[i]) == Math.round(ans) )
		{
			document.write("<p>above this is the ansr<strong> " + opt[i] + " </strong> <p>" );
		}

	}

//}

