<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_16c52b50b7916eb2d6e6527435409844fb45f2e5f63db876607671bacf573010 extends Twig_Template
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
        $__internal_5d5afa849b2f9505a3c5e171f155ac9afc80b9acff85065879bf96f83326fb1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d5afa849b2f9505a3c5e171f155ac9afc80b9acff85065879bf96f83326fb1f->enter($__internal_5d5afa849b2f9505a3c5e171f155ac9afc80b9acff85065879bf96f83326fb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_bc27b0f2b6264e883cd03a88bf04efcade9ae63d55feab64f66fd0c7c33ad24b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc27b0f2b6264e883cd03a88bf04efcade9ae63d55feab64f66fd0c7c33ad24b->enter($__internal_bc27b0f2b6264e883cd03a88bf04efcade9ae63d55feab64f66fd0c7c33ad24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5d5afa849b2f9505a3c5e171f155ac9afc80b9acff85065879bf96f83326fb1f->leave($__internal_5d5afa849b2f9505a3c5e171f155ac9afc80b9acff85065879bf96f83326fb1f_prof);

        
        $__internal_bc27b0f2b6264e883cd03a88bf04efcade9ae63d55feab64f66fd0c7c33ad24b->leave($__internal_bc27b0f2b6264e883cd03a88bf04efcade9ae63d55feab64f66fd0c7c33ad24b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
