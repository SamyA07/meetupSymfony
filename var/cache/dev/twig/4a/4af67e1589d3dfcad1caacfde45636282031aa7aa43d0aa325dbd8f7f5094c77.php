<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_bb1f99f49ab51ce71b0a458621775534a3fa0a386148fcaeb41657da028551c6 extends Twig_Template
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
        $__internal_058296e8da1a332206b50e95ff12d5e9d7fb87049a7f9181a28d88121ccd8299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_058296e8da1a332206b50e95ff12d5e9d7fb87049a7f9181a28d88121ccd8299->enter($__internal_058296e8da1a332206b50e95ff12d5e9d7fb87049a7f9181a28d88121ccd8299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_6191b43ba0e3073dc406e59feeedb4717469b274e9d357ffe006df03a20a58a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6191b43ba0e3073dc406e59feeedb4717469b274e9d357ffe006df03a20a58a1->enter($__internal_6191b43ba0e3073dc406e59feeedb4717469b274e9d357ffe006df03a20a58a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_058296e8da1a332206b50e95ff12d5e9d7fb87049a7f9181a28d88121ccd8299->leave($__internal_058296e8da1a332206b50e95ff12d5e9d7fb87049a7f9181a28d88121ccd8299_prof);

        
        $__internal_6191b43ba0e3073dc406e59feeedb4717469b274e9d357ffe006df03a20a58a1->leave($__internal_6191b43ba0e3073dc406e59feeedb4717469b274e9d357ffe006df03a20a58a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
