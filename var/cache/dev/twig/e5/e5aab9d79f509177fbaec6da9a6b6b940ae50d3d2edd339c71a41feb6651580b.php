<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_5292470ab53dd14c9ea48e6560d38e55b3c90c1bd0e09273d4b0ba4341108e70 extends Twig_Template
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
        $__internal_b3a1d0c54e79f7ec2aff7bc9000103ed92711042aaee658bc026e7c6ab42a8e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3a1d0c54e79f7ec2aff7bc9000103ed92711042aaee658bc026e7c6ab42a8e3->enter($__internal_b3a1d0c54e79f7ec2aff7bc9000103ed92711042aaee658bc026e7c6ab42a8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_5a60afa37dedeeecafb7b0227ca17a07c75c1ff839f673e20bbf0eb543b04e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a60afa37dedeeecafb7b0227ca17a07c75c1ff839f673e20bbf0eb543b04e15->enter($__internal_5a60afa37dedeeecafb7b0227ca17a07c75c1ff839f673e20bbf0eb543b04e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b3a1d0c54e79f7ec2aff7bc9000103ed92711042aaee658bc026e7c6ab42a8e3->leave($__internal_b3a1d0c54e79f7ec2aff7bc9000103ed92711042aaee658bc026e7c6ab42a8e3_prof);

        
        $__internal_5a60afa37dedeeecafb7b0227ca17a07c75c1ff839f673e20bbf0eb543b04e15->leave($__internal_5a60afa37dedeeecafb7b0227ca17a07c75c1ff839f673e20bbf0eb543b04e15_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
