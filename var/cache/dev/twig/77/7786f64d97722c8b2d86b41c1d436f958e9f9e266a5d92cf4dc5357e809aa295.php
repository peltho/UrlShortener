<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b37901052a51eebf86b6073601e0f05b0ba965f0f494cce4b6813f29b630c489 extends Twig_Template
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
        $__internal_2682e027d2337bf85c135c085ef127a1398e448a1d53d80f81222b6e1283779b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2682e027d2337bf85c135c085ef127a1398e448a1d53d80f81222b6e1283779b->enter($__internal_2682e027d2337bf85c135c085ef127a1398e448a1d53d80f81222b6e1283779b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_3b6e099d7599b392584189bfb62ad8c06e87d1ecc2434535958630b549b841ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6e099d7599b392584189bfb62ad8c06e87d1ecc2434535958630b549b841ef->enter($__internal_3b6e099d7599b392584189bfb62ad8c06e87d1ecc2434535958630b549b841ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2682e027d2337bf85c135c085ef127a1398e448a1d53d80f81222b6e1283779b->leave($__internal_2682e027d2337bf85c135c085ef127a1398e448a1d53d80f81222b6e1283779b_prof);

        
        $__internal_3b6e099d7599b392584189bfb62ad8c06e87d1ecc2434535958630b549b841ef->leave($__internal_3b6e099d7599b392584189bfb62ad8c06e87d1ecc2434535958630b549b841ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
