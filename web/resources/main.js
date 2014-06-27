function goToPage(page_id)
	{
	if ($("#"+page_id).length)
		{
		$(".page:visible").fadeOut(500);
		$("#"+page_id).fadeIn(500);
		/*
		$(".page:visible").fadeOut(300,function()
			{
			$("#"+page_id).fadeIn(300);
			});
		*/
		}
	}

function setUpNav()
	{
	var nav = $("#nav");
	var lis = nav.find("li");
	lis.bind("mouseover",function()
		{
		$(this).addClass("over");
		});
	lis.bind("mouseout",function()
		{
		$(this).removeClass("over");
		});
	lis.bind("click",function()
		{
		var t = $(this);
		if (!t.hasClass("selected"))
			{
			$("#nav li.selected").removeClass("selected");
			t.addClass("selected");
			var go_to = t.attr("class").split(" ");
			for (var i=0;i<go_to.length;i++)
				{
				if (go_to[i].indexOf("l_") == 0)
					{
					go_to = go_to[i].substr(2);
					break;
					}
				}
			goToPage(go_to);
			}
		});
	}

$(function()
	{
	setUpNav();
	});