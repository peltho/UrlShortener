<?php

/* base.html.twig */
class __TwigTemplate_bda154867235bb509c412aaa050cef6ed516e7234cdb9b1203b546fd83d6c411 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a5172847ce175956d7fdf6fcc51f4709be427fb144605c96d197794ffc8cd4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a5172847ce175956d7fdf6fcc51f4709be427fb144605c96d197794ffc8cd4e->enter($__internal_6a5172847ce175956d7fdf6fcc51f4709be427fb144605c96d197794ffc8cd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4520bd3c56dfb5862b438058edbd0552793fb77bd010139054d3cba0a6a24161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4520bd3c56dfb5862b438058edbd0552793fb77bd010139054d3cba0a6a24161->enter($__internal_4520bd3c56dfb5862b438058edbd0552793fb77bd010139054d3cba0a6a24161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock("body", $context, $blocks);
        echo "
        ";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </body>
</html>
";
        
        $__internal_6a5172847ce175956d7fdf6fcc51f4709be427fb144605c96d197794ffc8cd4e->leave($__internal_6a5172847ce175956d7fdf6fcc51f4709be427fb144605c96d197794ffc8cd4e_prof);

        
        $__internal_4520bd3c56dfb5862b438058edbd0552793fb77bd010139054d3cba0a6a24161->leave($__internal_4520bd3c56dfb5862b438058edbd0552793fb77bd010139054d3cba0a6a24161_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2999a95e8968e05d29cab0baac12e04ab75a4891d415ba9d4a2180ce6a4093b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2999a95e8968e05d29cab0baac12e04ab75a4891d415ba9d4a2180ce6a4093b1->enter($__internal_2999a95e8968e05d29cab0baac12e04ab75a4891d415ba9d4a2180ce6a4093b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6c1c65b688be559cd97227e0f82ad0317977df83be803aa6cc9697ad14bcbc04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1c65b688be559cd97227e0f82ad0317977df83be803aa6cc9697ad14bcbc04->enter($__internal_6c1c65b688be559cd97227e0f82ad0317977df83be803aa6cc9697ad14bcbc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Natae - Test";
        
        $__internal_6c1c65b688be559cd97227e0f82ad0317977df83be803aa6cc9697ad14bcbc04->leave($__internal_6c1c65b688be559cd97227e0f82ad0317977df83be803aa6cc9697ad14bcbc04_prof);

        
        $__internal_2999a95e8968e05d29cab0baac12e04ab75a4891d415ba9d4a2180ce6a4093b1->leave($__internal_2999a95e8968e05d29cab0baac12e04ab75a4891d415ba9d4a2180ce6a4093b1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4a7d981610888912f9be65fc2ef8a5ab1c45f346fe70807d40c4460cf09779f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a7d981610888912f9be65fc2ef8a5ab1c45f346fe70807d40c4460cf09779f2->enter($__internal_4a7d981610888912f9be65fc2ef8a5ab1c45f346fe70807d40c4460cf09779f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f1c90768247484571ae7574767a88076b5df82c31a0ab6de7daa70dbd5d2d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f1c90768247484571ae7574767a88076b5df82c31a0ab6de7daa70dbd5d2d2d->enter($__internal_6f1c90768247484571ae7574767a88076b5df82c31a0ab6de7daa70dbd5d2d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        ";
        
        $__internal_6f1c90768247484571ae7574767a88076b5df82c31a0ab6de7daa70dbd5d2d2d->leave($__internal_6f1c90768247484571ae7574767a88076b5df82c31a0ab6de7daa70dbd5d2d2d_prof);

        
        $__internal_4a7d981610888912f9be65fc2ef8a5ab1c45f346fe70807d40c4460cf09779f2->leave($__internal_4a7d981610888912f9be65fc2ef8a5ab1c45f346fe70807d40c4460cf09779f2_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e8dca6a8471d423c8d7b9bf0ea3d40efb2fc2af059f01a7319b108e6d2499f4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8dca6a8471d423c8d7b9bf0ea3d40efb2fc2af059f01a7319b108e6d2499f4d->enter($__internal_e8dca6a8471d423c8d7b9bf0ea3d40efb2fc2af059f01a7319b108e6d2499f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3dddf1b650b4cec9337fbadd50484716fb46c019ceca4c1e692a6306b2b05444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dddf1b650b4cec9337fbadd50484716fb46c019ceca4c1e692a6306b2b05444->enter($__internal_3dddf1b650b4cec9337fbadd50484716fb46c019ceca4c1e692a6306b2b05444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        // line 15
        echo "        ";
        
        $__internal_3dddf1b650b4cec9337fbadd50484716fb46c019ceca4c1e692a6306b2b05444->leave($__internal_3dddf1b650b4cec9337fbadd50484716fb46c019ceca4c1e692a6306b2b05444_prof);

        
        $__internal_e8dca6a8471d423c8d7b9bf0ea3d40efb2fc2af059f01a7319b108e6d2499f4d->leave($__internal_e8dca6a8471d423c8d7b9bf0ea3d40efb2fc2af059f01a7319b108e6d2499f4d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 15,  114 => 14,  105 => 13,  92 => 7,  83 => 6,  65 => 5,  53 => 16,  51 => 13,  47 => 12,  40 => 9,  38 => 6,  34 => 5,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Natae - Test{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/bootstrap.min.css') }}\"/>
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {{ block('body') }}
        {% block javascripts %}
            {#<script src=\"{{ asset('') }}\"></script>#}
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/thomas/GitHub/Natae/app/Resources/views/base.html.twig");
    }
}
