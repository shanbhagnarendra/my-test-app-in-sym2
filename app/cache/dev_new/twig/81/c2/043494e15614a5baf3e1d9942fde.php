<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_81c2043494e15614a5baf3e1d9942fde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    -moz-border-radius: 16px;
    -webkit-border-radius: 16px;
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  178 => 66,  175 => 65,  113 => 48,  76 => 31,  351 => 164,  347 => 163,  344 => 162,  339 => 161,  329 => 154,  327 => 153,  320 => 149,  313 => 145,  306 => 141,  299 => 137,  292 => 133,  263 => 113,  256 => 109,  249 => 105,  242 => 101,  232 => 93,  221 => 86,  218 => 85,  213 => 82,  210 => 81,  205 => 78,  161 => 63,  104 => 36,  100 => 39,  63 => 25,  58 => 19,  219 => 115,  211 => 110,  186 => 94,  172 => 64,  165 => 60,  137 => 66,  81 => 34,  198 => 78,  191 => 67,  179 => 68,  152 => 57,  146 => 56,  118 => 49,  110 => 47,  102 => 40,  90 => 34,  65 => 36,  170 => 33,  167 => 32,  134 => 54,  77 => 24,  53 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 167,  355 => 106,  341 => 105,  337 => 160,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 129,  283 => 88,  278 => 125,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 92,  224 => 117,  220 => 70,  214 => 69,  208 => 68,  177 => 65,  169 => 60,  143 => 32,  140 => 58,  132 => 48,  128 => 22,  119 => 42,  107 => 36,  71 => 30,  38 => 6,  155 => 56,  135 => 49,  126 => 47,  114 => 48,  84 => 37,  70 => 28,  67 => 24,  61 => 21,  94 => 38,  89 => 29,  85 => 25,  75 => 23,  68 => 14,  56 => 9,  87 => 34,  21 => 2,  26 => 6,  93 => 31,  88 => 38,  78 => 33,  46 => 13,  27 => 3,  44 => 12,  31 => 4,  28 => 3,  196 => 90,  183 => 82,  171 => 61,  166 => 60,  163 => 70,  158 => 62,  156 => 66,  151 => 59,  142 => 51,  138 => 50,  136 => 27,  121 => 50,  117 => 43,  105 => 40,  91 => 40,  62 => 20,  49 => 14,  24 => 3,  25 => 3,  19 => 1,  79 => 35,  72 => 22,  69 => 20,  47 => 9,  40 => 8,  37 => 10,  22 => 1,  246 => 32,  157 => 56,  145 => 35,  139 => 50,  131 => 42,  123 => 45,  120 => 44,  115 => 48,  111 => 47,  108 => 37,  101 => 32,  98 => 44,  96 => 37,  83 => 33,  74 => 30,  66 => 19,  55 => 16,  52 => 15,  50 => 10,  43 => 12,  41 => 7,  35 => 6,  32 => 5,  29 => 2,  209 => 82,  203 => 105,  199 => 76,  193 => 98,  189 => 73,  187 => 84,  182 => 66,  176 => 64,  173 => 64,  168 => 72,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 53,  144 => 70,  141 => 51,  133 => 55,  130 => 62,  125 => 51,  122 => 50,  116 => 54,  112 => 42,  109 => 44,  106 => 46,  103 => 37,  99 => 30,  95 => 42,  92 => 33,  86 => 28,  82 => 40,  80 => 32,  73 => 14,  64 => 23,  60 => 16,  57 => 11,  54 => 13,  51 => 12,  48 => 11,  45 => 16,  42 => 8,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
