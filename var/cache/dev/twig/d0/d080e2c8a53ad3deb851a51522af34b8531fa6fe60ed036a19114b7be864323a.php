<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_4161e32a13cfd14fa09e8d001f5b5d9e65f7e9bde1f12b2e4b5b56412a9680a6 extends Twig_Template
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
        $__internal_f9dfe804f48bf0132222ffbfdd32e3b0e72d5097436ca20b783ffebe5fdab25c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9dfe804f48bf0132222ffbfdd32e3b0e72d5097436ca20b783ffebe5fdab25c->enter($__internal_f9dfe804f48bf0132222ffbfdd32e3b0e72d5097436ca20b783ffebe5fdab25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_d52fcd86b19aba9bf335e162e9cd410968fdba096e7e8fdaf914b554c237f801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d52fcd86b19aba9bf335e162e9cd410968fdba096e7e8fdaf914b554c237f801->enter($__internal_d52fcd86b19aba9bf335e162e9cd410968fdba096e7e8fdaf914b554c237f801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_f9dfe804f48bf0132222ffbfdd32e3b0e72d5097436ca20b783ffebe5fdab25c->leave($__internal_f9dfe804f48bf0132222ffbfdd32e3b0e72d5097436ca20b783ffebe5fdab25c_prof);

        
        $__internal_d52fcd86b19aba9bf335e162e9cd410968fdba096e7e8fdaf914b554c237f801->leave($__internal_d52fcd86b19aba9bf335e162e9cd410968fdba096e7e8fdaf914b554c237f801_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
