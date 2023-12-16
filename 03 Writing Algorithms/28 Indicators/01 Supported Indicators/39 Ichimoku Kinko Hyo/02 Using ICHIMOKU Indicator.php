<!-- Code generated by indicator_reference_code_generator.py -->
<? 
include(DOCS_RESOURCES."/qcalgorithm-api/_method_container.html");

$hasReference = false;
$hasAutomaticIndicatorHelper = true;
$helperPrefix = '';
$typeName = 'IchimokuKinkoHyo';
$helperName = 'ICHIMOKU';
$helperArguments = 'symbol, 9, 26, 17, 52, 26, 26';
$properties = array("Tenkan","Kijun","SenkouA","SenkouB","Chikou","TenkanMaximum","TenkanMinimum","KijunMaximum","KijunMinimum","SenkouBMaximum","SenkouBMinimum","DelayedTenkanSenkouA","DelayedKijunSenkouA","DelayedMaximumSenkouB","DelayedMinimumSenkouB");
$otherProperties = array();
$updateParameterType = 'a <code>TradeBar</code> or <code>QuoteBar</code>';
$constructorArguments = '9, 26, 17, 52, 26, 26';
$updateParameterValue = 'bar';
$hasMovingAverageTypeParameter = False;
$constructorBox = 'ichimoku-kinko-hyo';
include(DOCS_RESOURCES."/indicators/using-indicator.php");
?>