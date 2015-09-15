function isIE() {
    var a = navigator.userAgent.toLowerCase();
    return -1 != a.indexOf("msie") ? parseInt(a.split("msie")[1]) : !1
}(function(a) {
    var b = a(".owl-carousel");
    0 < b.length && a(document).ready(function() {
        b.owlCarousel({
            margin: 30,
            smartSpeed: 450,
            loop: !0,
            dots: !0,
            dotsEach: 1,
            nav: !1,
            responsive: {
                0: {
                    items: 1
                }
            }
        })
    })
})(jQuery);
(function(a) {
    var b = a(".pretty_image");
    0 < b.length && a(document).ready(function() {
        b.fancybox({
					closeBtn  : false,

					helpers : {
						title : {
							type : 'inside'
						},
						buttons	: {}
					}
				})
    	})
})(jQuery);
(function(a) {
    a("html").hasClass("desktop") && a(document).ready(function() {
        a().UItoTop({
            easingType: "easeOutQuart",
            containerClass: "toTop fa fa-angle-up"
        })
    })
})(jQuery);
$(function() {
    var a = document.querySelector && document.querySelector('meta[name="viewport"]'),
        b = navigator.userAgent,
        c = function() {
            a.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0"
        };
    a && /iPhone|iPad/.test(b) && !/Opera Mini/.test(b) && (a.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0", document.addEventListener("gesturestart", c, !1));
    void 0 != window.orientation && (b.match(/ipod|ipad|iphone/gi) || $(".sf-menus li").each(function() {
        $(">ul", this)[0] && $(">a",
            this).toggle(function() {
            return !1
        }, function() {
            window.location.href = $(this).attr("href")
        })
    }))
});
var ua = navigator.userAgent.toLocaleLowerCase(),
    regV = /ipod|ipad|iphone/gi,
    result = ua.match(regV),
    userScale = "";
result || (userScale = ",user-scalable=0");
document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0' + userScale + '">');
(function(a) {
    var b = a(".select");
    0 < b.length && a(document).ready(function() {
        b.each(function() {
            var c = a(this);
            c.append('<div class="pseudo-select"></div>');
            c.append('<ul class="pseudo-dropdown"></ul>');
            var b = c.find("select"),
                d = c.find(".pseudo-select"),
                e = c.find(".pseudo-dropdown");
            b.css("display", "none");
            b.find("option").each(function() {
                var b = a(this);
                e.append('<li><a href="' + b.attr("data-href") + '">' + b.text() + "</a></li>")
            });
            var f = e.find("li");
            if (0 < b.find("option").index(b.find("option").filter(":selected"))) {
                var g =
                    b.find("option").index(b.find("option").filter(":selected"));
                f.eq(g).addClass("selected")
            } else f.eq(0).addClass("selected"), b.find("option")[0].setAttribute("selected", "");
            d.text(function() {
                return e.find(".selected").text()
            });
            d.click(function() {
                c.hasClass("opened") ? c.removeClass("opened") : c.addClass("opened")
            });
            f.click(function() {
                var h = f.index(f.filter(".selected")),
                    g = f.index(a(this));
                e.find(".selected").removeClass("selected");
                a(this).addClass("selected");
                d.text(function() {
                    return e.find(".selected").text()
                });
                c.removeClass("opened");
                b.find("option")[h].removeAttribute("selected");
                b.find("option")[g].setAttribute("selected", "")
            });
            a(document).on("click", function(a) {
                c.length && (c.is(a.target) || 0 !== c.has(a.target).length || c.removeClass("opened"))
            });
            c.filter(".opened").on("click", function(a) {
                c.removeClass("opened")
            })
        })
    })
})(jQuery);
(function(a) {
    a(document).ready(function() {
        var b = a(".rd-mobilemenu ul li.section a.section_link"),
            c = a(".rd-mobilemenu ul li.section a.article_link");
        a(".rd-mobilemenu ul li").find("ul");
        b.on("click", function(b) {
            a(this).attr("href").split("?");
            b = a(this).attr("data-key");
            a(this).attr("data-id");
            a(this).parent();
            sectionClass(b)
        });
        c.on("click", function(b) {
            a(this).attr("href").split("?")[1].split("#");
            var d = a(this).attr("data-id");
            a(this).attr("data-sectionId");
            var e = a(this).attr("data-section"),
                d = "#" +
                d;
            c.parent().removeClass("active");
            a(this).parent().addClass("active");
            a("body").attr("data-section") == e && (a("html, body").animate({
                scrollTop: a(d).offset().top - 100
            }, 300), document.location.hash = d);
            b.stopImmediatePropagation();
            b.preventDefault()
        })
    })
})(jQuery);
(function(a) {
    a(document).ready(function() {
        var b = a("#search-form");
        b.submit(function(c) {
            c.preventDefault();
            a.ajax({
                type: "POST",
                url: "search.php",
                data: b.serialize(),
                success: function(b) {
                    a(".search-results").html(b)
                }
            })
        })
    })
})(jQuery);