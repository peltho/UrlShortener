<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_9bec2cb366f3c3c697d0661247e618e3b9cae099356c3bf454e5436a1a4b84a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae975ae0d71549e1961013dce6bd55ab65203a4a8af1843833f79c8209780b6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae975ae0d71549e1961013dce6bd55ab65203a4a8af1843833f79c8209780b6a->enter($__internal_ae975ae0d71549e1961013dce6bd55ab65203a4a8af1843833f79c8209780b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_f1148d0b5ffcbba50c6b4baa1a90f5e1163c74623654b4cb1cfecfe595ec458c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1148d0b5ffcbba50c6b4baa1a90f5e1163c74623654b4cb1cfecfe595ec458c->enter($__internal_f1148d0b5ffcbba50c6b4baa1a90f5e1163c74623654b4cb1cfecfe595ec458c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae975ae0d71549e1961013dce6bd55ab65203a4a8af1843833f79c8209780b6a->leave($__internal_ae975ae0d71549e1961013dce6bd55ab65203a4a8af1843833f79c8209780b6a_prof);

        
        $__internal_f1148d0b5ffcbba50c6b4baa1a90f5e1163c74623654b4cb1cfecfe595ec458c->leave($__internal_f1148d0b5ffcbba50c6b4baa1a90f5e1163c74623654b4cb1cfecfe595ec458c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_44594a71abcb99e427116b623ec09d0bda343fed36656bf22cfc987b127c298e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44594a71abcb99e427116b623ec09d0bda343fed36656bf22cfc987b127c298e->enter($__internal_44594a71abcb99e427116b623ec09d0bda343fed36656bf22cfc987b127c298e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_38fac398b4f67eab9504cca52e22ccda7427a713f8d36dd123679ba4b283f30f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38fac398b4f67eab9504cca52e22ccda7427a713f8d36dd123679ba4b283f30f->enter($__internal_38fac398b4f67eab9504cca52e22ccda7427a713f8d36dd123679ba4b283f30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_38fac398b4f67eab9504cca52e22ccda7427a713f8d36dd123679ba4b283f30f->leave($__internal_38fac398b4f67eab9504cca52e22ccda7427a713f8d36dd123679ba4b283f30f_prof);

        
        $__internal_44594a71abcb99e427116b623ec09d0bda343fed36656bf22cfc987b127c298e->leave($__internal_44594a71abcb99e427116b623ec09d0bda343fed36656bf22cfc987b127c298e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d855783e05f239a0392e225908063c91e49b22554ad5540cc7315cbc0c12352 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d855783e05f239a0392e225908063c91e49b22554ad5540cc7315cbc0c12352->enter($__internal_5d855783e05f239a0392e225908063c91e49b22554ad5540cc7315cbc0c12352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8217fe92d48f42038c53b3687637f23419f22f1d3fb828471e6b678023fe274a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8217fe92d48f42038c53b3687637f23419f22f1d3fb828471e6b678023fe274a->enter($__internal_8217fe92d48f42038c53b3687637f23419f22f1d3fb828471e6b678023fe274a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 11
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
    <h1>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_8217fe92d48f42038c53b3687637f23419f22f1d3fb828471e6b678023fe274a->leave($__internal_8217fe92d48f42038c53b3687637f23419f22f1d3fb828471e6b678023fe274a_prof);

        
        $__internal_5d855783e05f239a0392e225908063c91e49b22554ad5540cc7315cbc0c12352->leave($__internal_5d855783e05f239a0392e225908063c91e49b22554ad5540cc7315cbc0c12352_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  82 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
    <h1>{{ file }} <small>line {{ line }}</small></h1>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
