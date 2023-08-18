<h4>Customize the Report HTML</h4>

<p>The <a rel='nofollow' target='_blank' href='https://github.com/QuantConnect/Lean/blob/master/Report/template.html'><span class='public-file-name'>Report / template.html</span></a> in the LEAN GitHub repository defines the stucture of the reports you generate. To override the HTML file, <?=$addHTMLFileInstructions?>. To include some of the information and charts that are in the default report, use the report keys in the <a rel='nofollow' target='_blank' href='https://github.com/QuantConnect/Lean/blob/master/Report/ReportKey.cs'>Report / ReportKey.cs</a> file in the LEAN GitHub repository. For example, to add the <a href='/docs/v2/writing-algorithms/key-concepts/glossary#27-Sharpe-ratio'>Sharpe ratio</a> of your backtest to the custom HTML file, use <code>{{$KPI-SHARPE}}</code>.</p>

<p>To include the <a href='/docs/v2/cloud-platform/backtesting/report#08-Crisis-Events'>crisis event plots</a> in your report, add the <code>{{$HTML-CRISIS-PLOTS}}</code> key and then define the structure of the individual plots inside of <code>&lt;!--crisis</code> and <code>crisis--&gt;</code>. Inside of this comment, you can utilize the <code>{{$TEXT-CRISIS-TITLE}}</code> and <code>{{$PLOT-CRISIS-CONTENT}}</code> keys. For example, the following HTML is the default format for each crisis plot:</p>

<div class="section-example-container">
    <pre class="html">&lt;!--crisis
<div class="col-xs-4">
    <table class="crisis-chart table compact">
        <thead>
        <tr>
            <th style="display: block; height: 75px;">{{$TEXT-CRISIS-TITLE}}</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td style="padding:0;">
                <img src="{{$PLOT-CRISIS-CONTENT}}">
            </td>
        </tr>
        </tbody>
    </table>
</div>
crisis--&gt</pre>
</div>

<p>To include the <a href='/docs/v2/cloud-platform/backtesting/report#09-Parameters'>algorithm parameter</a> in your report, add the <code>{{$PARAMETERS}}</code> key and then define the HTML element inside of <code>&lt;!--parameters</code> and <code>parameters--&gt;</code>. Inside of this comment, you can use special keys <code>{{$KEY&lt;parameterIndex&gt;}}</code> and <code>{{$VALUE&lt;parameterIndex&gt;}}</code>, which represent the key and value of a single parameter. For example, the following HTML is the default format for the parameters element:</p>

<div class="section-example-container">
    <pre class="html">&lt;!--parameters
<tr>
	<td class = "title"> {{$KEY0}} </td><td> {{$VALUE0}} </td>
	<td class = "title"> {{$KEY1}} </td><td> {{$VALUE1}} </td>
</tr>
parameters--&gt</pre>
</div>

<p>In the preceding example, <code>{{$KEY0}}</code> is the name of the first parameter in the algorithm and <code>{{$VALUE0}}</code> is its value.</p>

<? if ($leanCLI) { ?>
<p>To generate the report with your custom HTML file, run <code>lean report --html &lt;pathToCustomHTMLFile&gt;</code>.</p>
<? } ?>

<h4>Customize the Report CSS</h4>

<p>The <a rel='nofollow' target='_blank' href='https://github.com/QuantConnect/Lean/blob/master/Report/css/report.css'><span class='public-file-name'>Report / css / report.css</span></a> in the LEAN GitHub repository defines the style of the reports you generate. To override the stylesheet, <?=$addHTMLFileInstructions?>.</p>

<? if ($leanCLI) { ?>
<p>To generate the report with your custom CSS file, run <code>lean report --css &lt;pathToCustomCSSFile&gt;</code>.</p>
<? } ?>