/* Pie Charts
 -------------------------------------------------------*/
$(function () {
    //$('.pie-chart').appear(function () {
    $('.pie-chart').on('appear', function () {


        $('.pie-chart-init').easyPieChart({
            //your configuration goes here

            animate   : {
                duration: 1500,
                enabled : true
            },
            scaleColor: false,
            trackColor: '#f7f9fa',
            lineWidth : 5,
            size      : 180,
            lineCap   : 'square',

            onStep: function (from, to, percent) {
                $(this.el).find('.pie-percent-init').text(Math.round(percent));
            }
        });

        var chart = window.chart = $('.pie-chart-init').data('easyPieChart');
        $('.js_update').on('click', function () {
            chart.update(Math.random() * 200 - 100);
        });
    });
});
