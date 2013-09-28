<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_6aa19d52e9723b5d7b9010e31ccc9f0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\"/>
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  332 => 116,  324 => 113,  321 => 112,  318 => 111,  315 => 110,  303 => 106,  300 => 105,  297 => 104,  291 => 102,  288 => 101,  274 => 97,  265 => 96,  255 => 93,  243 => 92,  231 => 83,  212 => 78,  202 => 77,  190 => 76,  185 => 74,  174 => 65,  178 => 66,  175 => 65,  113 => 48,  76 => 25,  351 => 164,  347 => 163,  344 => 119,  339 => 161,  329 => 154,  327 => 114,  320 => 149,  313 => 145,  306 => 107,  299 => 137,  292 => 133,  263 => 95,  256 => 109,  249 => 105,  242 => 101,  232 => 93,  221 => 86,  218 => 85,  213 => 82,  210 => 81,  205 => 78,  161 => 63,  104 => 32,  100 => 39,  63 => 18,  58 => 14,  219 => 115,  211 => 110,  186 => 94,  172 => 64,  165 => 60,  137 => 66,  81 => 34,  198 => 78,  191 => 67,  179 => 68,  152 => 57,  146 => 56,  118 => 49,  110 => 47,  102 => 40,  90 => 34,  65 => 36,  170 => 33,  167 => 32,  134 => 54,  77 => 24,  53 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 167,  355 => 106,  341 => 118,  337 => 160,  322 => 101,  314 => 99,  312 => 109,  309 => 108,  305 => 95,  298 => 91,  294 => 90,  285 => 129,  283 => 100,  278 => 98,  268 => 85,  264 => 84,  258 => 94,  252 => 80,  247 => 78,  241 => 77,  235 => 85,  229 => 92,  224 => 81,  220 => 70,  214 => 69,  208 => 68,  177 => 65,  169 => 60,  143 => 51,  140 => 58,  132 => 48,  128 => 22,  119 => 40,  107 => 36,  71 => 30,  38 => 7,  155 => 56,  135 => 49,  126 => 47,  114 => 48,  84 => 37,  70 => 28,  67 => 20,  61 => 15,  94 => 38,  89 => 29,  85 => 24,  75 => 19,  68 => 14,  56 => 9,  87 => 34,  21 => 2,  26 => 6,  93 => 31,  88 => 25,  78 => 33,  46 => 10,  27 => 3,  44 => 10,  31 => 4,  28 => 3,  196 => 90,  183 => 82,  171 => 61,  166 => 60,  163 => 70,  158 => 62,  156 => 62,  151 => 59,  142 => 51,  138 => 50,  136 => 48,  121 => 50,  117 => 39,  105 => 40,  91 => 33,  62 => 20,  49 => 11,  24 => 3,  25 => 3,  19 => 1,  79 => 21,  72 => 18,  69 => 17,  47 => 11,  40 => 8,  37 => 10,  22 => 1,  246 => 32,  157 => 56,  145 => 52,  139 => 49,  131 => 45,  123 => 45,  120 => 44,  115 => 48,  111 => 47,  108 => 37,  101 => 31,  98 => 30,  96 => 37,  83 => 33,  74 => 30,  66 => 19,  55 => 13,  52 => 12,  50 => 10,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 2,  209 => 82,  203 => 105,  199 => 76,  193 => 98,  189 => 73,  187 => 75,  182 => 66,  176 => 64,  173 => 64,  168 => 72,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 53,  144 => 70,  141 => 51,  133 => 55,  130 => 62,  125 => 42,  122 => 41,  116 => 54,  112 => 36,  109 => 35,  106 => 46,  103 => 37,  99 => 30,  95 => 42,  92 => 27,  86 => 28,  82 => 28,  80 => 27,  73 => 24,  64 => 23,  60 => 16,  57 => 16,  54 => 13,  51 => 13,  48 => 11,  45 => 9,  42 => 8,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
