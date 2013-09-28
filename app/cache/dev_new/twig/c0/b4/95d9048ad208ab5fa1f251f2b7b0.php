<?php

/* HrmsEmployeeBundle:HrmState:new.html.twig */
class __TwigTemplate_c0b495d9048ad208ab5fa1f251f2b7b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>HrmState creation</h1>

    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hrmstate_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <p>
            <button type=\"submit\">Create</button>
        </p>
    </form>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hrmstate"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "HrmsEmployeeBundle:HrmState:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 25,  58 => 19,  219 => 115,  211 => 110,  186 => 94,  172 => 86,  165 => 82,  137 => 66,  81 => 34,  198 => 78,  191 => 73,  179 => 90,  152 => 57,  146 => 56,  118 => 49,  110 => 47,  102 => 46,  90 => 34,  65 => 36,  170 => 33,  167 => 32,  134 => 53,  77 => 24,  53 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 117,  220 => 70,  214 => 69,  208 => 68,  177 => 65,  169 => 60,  143 => 32,  140 => 55,  132 => 51,  128 => 22,  119 => 42,  107 => 36,  71 => 23,  38 => 6,  155 => 20,  135 => 47,  126 => 51,  114 => 48,  84 => 37,  70 => 28,  67 => 22,  61 => 21,  94 => 38,  89 => 20,  85 => 25,  75 => 27,  68 => 14,  56 => 9,  87 => 33,  21 => 2,  26 => 6,  93 => 28,  88 => 38,  78 => 33,  46 => 13,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  196 => 90,  183 => 82,  171 => 61,  166 => 60,  163 => 70,  158 => 78,  156 => 66,  151 => 74,  142 => 55,  138 => 54,  136 => 27,  121 => 17,  117 => 44,  105 => 40,  91 => 40,  62 => 20,  49 => 17,  24 => 3,  25 => 3,  19 => 1,  79 => 35,  72 => 38,  69 => 24,  47 => 9,  40 => 8,  37 => 10,  22 => 1,  246 => 32,  157 => 56,  145 => 35,  139 => 50,  131 => 42,  123 => 58,  120 => 40,  115 => 48,  111 => 37,  108 => 37,  101 => 32,  98 => 44,  96 => 37,  83 => 25,  74 => 30,  66 => 23,  55 => 15,  52 => 15,  50 => 10,  43 => 8,  41 => 7,  35 => 6,  32 => 3,  29 => 2,  209 => 82,  203 => 105,  199 => 67,  193 => 98,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 64,  168 => 72,  164 => 59,  162 => 59,  154 => 54,  149 => 51,  147 => 58,  144 => 70,  141 => 51,  133 => 55,  130 => 62,  125 => 44,  122 => 50,  116 => 54,  112 => 42,  109 => 44,  106 => 46,  103 => 37,  99 => 30,  95 => 42,  92 => 33,  86 => 38,  82 => 40,  80 => 19,  73 => 14,  64 => 17,  60 => 21,  57 => 11,  54 => 19,  51 => 14,  48 => 13,  45 => 16,  42 => 8,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
