<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6cc14527bd13c03ede097d7fd452f604a6498dee5cd6fc3e781f565eb64cb79a extends Twig_Template
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
        $__internal_821127b27a2dbb68d11fa17a26e85039b05c199c79ae8377ab28b838a7b92fbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_821127b27a2dbb68d11fa17a26e85039b05c199c79ae8377ab28b838a7b92fbc->enter($__internal_821127b27a2dbb68d11fa17a26e85039b05c199c79ae8377ab28b838a7b92fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_893745a028b6577976bde4e397bb5b7098ff474220ee98b2e0917585a5379ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_893745a028b6577976bde4e397bb5b7098ff474220ee98b2e0917585a5379ea9->enter($__internal_893745a028b6577976bde4e397bb5b7098ff474220ee98b2e0917585a5379ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_821127b27a2dbb68d11fa17a26e85039b05c199c79ae8377ab28b838a7b92fbc->leave($__internal_821127b27a2dbb68d11fa17a26e85039b05c199c79ae8377ab28b838a7b92fbc_prof);

        
        $__internal_893745a028b6577976bde4e397bb5b7098ff474220ee98b2e0917585a5379ea9->leave($__internal_893745a028b6577976bde4e397bb5b7098ff474220ee98b2e0917585a5379ea9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fe98e6474022d86b990769ef390afa1f69df819c4d56c859087fb60e820bbecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe98e6474022d86b990769ef390afa1f69df819c4d56c859087fb60e820bbecc->enter($__internal_fe98e6474022d86b990769ef390afa1f69df819c4d56c859087fb60e820bbecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b6b43973874f1a24259b0961492c49b1b7e7960f44c531d075c64cb7b66e6455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6b43973874f1a24259b0961492c49b1b7e7960f44c531d075c64cb7b66e6455->enter($__internal_b6b43973874f1a24259b0961492c49b1b7e7960f44c531d075c64cb7b66e6455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b6b43973874f1a24259b0961492c49b1b7e7960f44c531d075c64cb7b66e6455->leave($__internal_b6b43973874f1a24259b0961492c49b1b7e7960f44c531d075c64cb7b66e6455_prof);

        
        $__internal_fe98e6474022d86b990769ef390afa1f69df819c4d56c859087fb60e820bbecc->leave($__internal_fe98e6474022d86b990769ef390afa1f69df819c4d56c859087fb60e820bbecc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0229c438ea35fc77e27a33e6880e5d4226197e33ab1708fc0d140e4c0545a6e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0229c438ea35fc77e27a33e6880e5d4226197e33ab1708fc0d140e4c0545a6e6->enter($__internal_0229c438ea35fc77e27a33e6880e5d4226197e33ab1708fc0d140e4c0545a6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fccbfff7726924b28759a3957b6bc887e697175b1ed4c50ce888b2bb6b388397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fccbfff7726924b28759a3957b6bc887e697175b1ed4c50ce888b2bb6b388397->enter($__internal_fccbfff7726924b28759a3957b6bc887e697175b1ed4c50ce888b2bb6b388397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fccbfff7726924b28759a3957b6bc887e697175b1ed4c50ce888b2bb6b388397->leave($__internal_fccbfff7726924b28759a3957b6bc887e697175b1ed4c50ce888b2bb6b388397_prof);

        
        $__internal_0229c438ea35fc77e27a33e6880e5d4226197e33ab1708fc0d140e4c0545a6e6->leave($__internal_0229c438ea35fc77e27a33e6880e5d4226197e33ab1708fc0d140e4c0545a6e6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a642233713c2413ca2df9620966293a09a4b01d9f07b1d2a3397b431adfeeb6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a642233713c2413ca2df9620966293a09a4b01d9f07b1d2a3397b431adfeeb6e->enter($__internal_a642233713c2413ca2df9620966293a09a4b01d9f07b1d2a3397b431adfeeb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_73aae0c541b3997c870793569f59b2efadc69fa68d299b681a18fe138c722546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73aae0c541b3997c870793569f59b2efadc69fa68d299b681a18fe138c722546->enter($__internal_73aae0c541b3997c870793569f59b2efadc69fa68d299b681a18fe138c722546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_73aae0c541b3997c870793569f59b2efadc69fa68d299b681a18fe138c722546->leave($__internal_73aae0c541b3997c870793569f59b2efadc69fa68d299b681a18fe138c722546_prof);

        
        $__internal_a642233713c2413ca2df9620966293a09a4b01d9f07b1d2a3397b431adfeeb6e->leave($__internal_a642233713c2413ca2df9620966293a09a4b01d9f07b1d2a3397b431adfeeb6e_prof);

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
