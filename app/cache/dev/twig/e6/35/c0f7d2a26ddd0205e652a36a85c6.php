<?php

/* ::base.html.twig */
class __TwigTemplate_e635c0f7d2a26ddd0205e652a36a85c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "318a786_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_318a786_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/318a786_jquery.min_1.js");
            // line 9
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "318a786"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_318a786") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/318a786.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f07a403_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f07a403_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/f07a403_part_1_bootstrap.min_1.js");
            // line 12
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "f07a403_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f07a403_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/f07a403_part_1_jquery.min_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "f07a403"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f07a403") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/f07a403.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 14
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "27d20bd_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_27d20bd_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/27d20bd_part_1_bootstrap-responsive_1.css");
            // line 15
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // asset "27d20bd_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_27d20bd_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/27d20bd_part_1_bootstrap-responsive.min_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // asset "27d20bd_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_27d20bd_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/27d20bd_part_1_bootstrap-theme_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // asset "27d20bd_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_27d20bd_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/27d20bd_part_1_bootstrap-theme.min_4.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // asset "27d20bd_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_27d20bd_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/27d20bd_part_1_bootstrap_5.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // asset "27d20bd_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_27d20bd_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/27d20bd_part_1_bootstrap.min_6.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
        } else {
            // asset "27d20bd"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_27d20bd") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/27d20bd.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
        }
        unset($context["asset_url"]);
        // line 17
        echo "  </head>

  <body>
  ";
        // line 20
        $this->displayBlock('navigation', $context, $blocks);
        // line 22
        echo "
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class=\"jumbotron\">
      <div class=\"container\">
      ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "\t  </div>
    </div>

    <div class=\"container\">
      <footer>
                ";
        // line 32
        $this->displayBlock('footer', $context, $blocks);
        // line 35
        echo "      </footer>
    </div> <!-- /container -->


  </body>
</html>
";
    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        // line 21
        echo "  ";
    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
    }

    // line 32
    public function block_footer($context, array $blocks = array())
    {
        // line 33
        echo "\t  <p>&copy; Company 2013</p>
\t    ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 33,  167 => 32,  162 => 26,  158 => 21,  155 => 20,  145 => 35,  143 => 32,  136 => 27,  134 => 26,  128 => 22,  126 => 20,  121 => 17,  77 => 15,  73 => 14,  53 => 12,  49 => 11,  35 => 9,  31 => 8,  22 => 1,);
    }
}
