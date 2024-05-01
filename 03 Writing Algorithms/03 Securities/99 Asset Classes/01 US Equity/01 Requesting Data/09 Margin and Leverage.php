<p>LEAN models buying power and margin calls to ensure your algorithm stays within the margin requirements. In backtests, the default leverage for margin accounts is 2x leverage and leverage is not available for cash accounts. To change the amount of leverage you can use for a security, pass a <code>leverage</code> argument to the <code class="csharp">AddEquity</code><code class="python">add_equity</code> method.</p>

<div class="section-example-container">
    <pre class="csharp">_symbol = AddEquity("SPY", leverage: 3).Symbol;</pre>
    <pre class="python">self._symbol = self.add_equity("SPY", leverage=3).symbol</pre>
</div>

<p>In live trading, the brokerage determines how much leverage you may use. For more information about the leverage they provide, see <a href='/docs/v2/cloud-platform/live-trading/brokerages'>Brokerages</a>.</p>
