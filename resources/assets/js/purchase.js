$(function() {
  var dateFormat = "dd/mm/yy",
    productPrice = $('#product-price').val();

  $('#datepicker').datepicker({
    format: "dd/mm/yy",
    weekStart: 1,
    todayBtn: "linked",
    autoclose: true,
    todayHighlight: true,
    startDate: '0',
    endDate: '+30d',
  }).on('change', function() {
    calcPrice();
  });

  $('#purchase-quantity-lot').on('change', function() {
    calcPrice();
  })

  function calcPrice() {
    var lot  = $('#purchase-quantity-lot').val() || 1;
    var price  = _.round(productPrice * calcDays() * lot, 2);
    $('#total-price').val(price.toFixed(2));
  }
  function calcDays() {
    var days = Math.ceil( ($('#end').datepicker('getDate') - $('#start').datepicker('getDate')) / (1000 * 60 * 60 * 24));
    return (days > 0 ? days + 1 : 1); // set minimum day to 1
  }
})
