$(function(){
  $.getJSON("/chart", function (result) {

    var labels = [],data=[];
    for (var i = 0; i < result.length; i++) {
        labels.push(result[i].month);
        data.push(result[i].projects);
    }