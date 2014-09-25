var jQuery191 = jQuery;
jQuery.noConflict(true);

(function ($) {

Drupal.behaviors.bookTOCtree = {
attach: function (context, settings) {
    var TOCtree = $("#toctree").jstree({
        "core" : { "animation":0 },
        "themes" : { "theme":"classic", "icons":false },
        "plugins" : [ "themes", "html_data", "cookies" ]
    });

    //$("#toctree").children("ul:first").find("a").each( function (i, e) { console.log(i+" : "+ $(this).id + " " + $(this).text()); });
    //var allNodes = $("#toctree").children("ul:first").find("li");
    //for (var i=0; i<allNodes.length; i++) {
    //    var parents = $("#toctree").jstree("get_path", $(allNodes[i]), true);
    //    console.log(i + " : " + $(allNodes[i]).attr("id") + " " + parents.length + " " +  $(allNodes[i]).find("a:first").text());
    //}
}

};

})(jQuery191);
