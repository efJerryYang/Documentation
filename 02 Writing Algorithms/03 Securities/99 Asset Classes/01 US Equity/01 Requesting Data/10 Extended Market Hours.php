<?php 
include(DOCS_RESOURCES."/securities/extended-market-hours.php"); 
$cCode = "AddEquity(\"SPY\", extendedMarketHours: true);";
$pyCode = "self.AddEquity(\"SPY\", extendedMarketHours=True)";
$supportedIntradayData = true;
$marketHoursLink = "/docs/v2/writing-algorithms/securities/asset-classes/us-equity/market-hours";
$getExtMarketHoursText($cCode, $pyCode, $supportedIntradayData, $marketHoursLink);
?>
