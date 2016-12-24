<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8108f5d1ee36c3878b2175a55b3d302e34d4747217b0f55cddfb625da60cfabe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21543a7371a22aeee590f3354818b4c51684c92d5862187718cacc168ea06204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21543a7371a22aeee590f3354818b4c51684c92d5862187718cacc168ea06204->enter($__internal_21543a7371a22aeee590f3354818b4c51684c92d5862187718cacc168ea06204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0adce04621164d07456341c048ea6c38f575b578cecac2d3bc3b60e8ba3824b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0adce04621164d07456341c048ea6c38f575b578cecac2d3bc3b60e8ba3824b7->enter($__internal_0adce04621164d07456341c048ea6c38f575b578cecac2d3bc3b60e8ba3824b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21543a7371a22aeee590f3354818b4c51684c92d5862187718cacc168ea06204->leave($__internal_21543a7371a22aeee590f3354818b4c51684c92d5862187718cacc168ea06204_prof);

        
        $__internal_0adce04621164d07456341c048ea6c38f575b578cecac2d3bc3b60e8ba3824b7->leave($__internal_0adce04621164d07456341c048ea6c38f575b578cecac2d3bc3b60e8ba3824b7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fa796bd80a417eaa7ae3ec413a00f7369af9c78bc04be74f5d4f9bebfcb51101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa796bd80a417eaa7ae3ec413a00f7369af9c78bc04be74f5d4f9bebfcb51101->enter($__internal_fa796bd80a417eaa7ae3ec413a00f7369af9c78bc04be74f5d4f9bebfcb51101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_aaba793481785c389ce7ebdb76135f96291b11feeb888cd3a69e241d6bce2554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaba793481785c389ce7ebdb76135f96291b11feeb888cd3a69e241d6bce2554->enter($__internal_aaba793481785c389ce7ebdb76135f96291b11feeb888cd3a69e241d6bce2554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_aaba793481785c389ce7ebdb76135f96291b11feeb888cd3a69e241d6bce2554->leave($__internal_aaba793481785c389ce7ebdb76135f96291b11feeb888cd3a69e241d6bce2554_prof);

        
        $__internal_fa796bd80a417eaa7ae3ec413a00f7369af9c78bc04be74f5d4f9bebfcb51101->leave($__internal_fa796bd80a417eaa7ae3ec413a00f7369af9c78bc04be74f5d4f9bebfcb51101_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3175bfebcbe7fc99222f9f83020d7e1907905c9f869708cb458ffaf6cb0aa43a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3175bfebcbe7fc99222f9f83020d7e1907905c9f869708cb458ffaf6cb0aa43a->enter($__internal_3175bfebcbe7fc99222f9f83020d7e1907905c9f869708cb458ffaf6cb0aa43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2b3a4b9271a78fb22abd120127fd11ad92aac75daf1d4ffe0f5ed734acb73288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b3a4b9271a78fb22abd120127fd11ad92aac75daf1d4ffe0f5ed734acb73288->enter($__internal_2b3a4b9271a78fb22abd120127fd11ad92aac75daf1d4ffe0f5ed734acb73288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2b3a4b9271a78fb22abd120127fd11ad92aac75daf1d4ffe0f5ed734acb73288->leave($__internal_2b3a4b9271a78fb22abd120127fd11ad92aac75daf1d4ffe0f5ed734acb73288_prof);

        
        $__internal_3175bfebcbe7fc99222f9f83020d7e1907905c9f869708cb458ffaf6cb0aa43a->leave($__internal_3175bfebcbe7fc99222f9f83020d7e1907905c9f869708cb458ffaf6cb0aa43a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_610fb38a5e0120b414451300fb0de1722ccea1e5def03808b4deb5e224782d7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_610fb38a5e0120b414451300fb0de1722ccea1e5def03808b4deb5e224782d7b->enter($__internal_610fb38a5e0120b414451300fb0de1722ccea1e5def03808b4deb5e224782d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5ab4a280d339a3df9d74449c58d0a8923a8752b573bbb3baef6e810959c4318a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ab4a280d339a3df9d74449c58d0a8923a8752b573bbb3baef6e810959c4318a->enter($__internal_5ab4a280d339a3df9d74449c58d0a8923a8752b573bbb3baef6e810959c4318a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5ab4a280d339a3df9d74449c58d0a8923a8752b573bbb3baef6e810959c4318a->leave($__internal_5ab4a280d339a3df9d74449c58d0a8923a8752b573bbb3baef6e810959c4318a_prof);

        
        $__internal_610fb38a5e0120b414451300fb0de1722ccea1e5def03808b4deb5e224782d7b->leave($__internal_610fb38a5e0120b414451300fb0de1722ccea1e5def03808b4deb5e224782d7b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
