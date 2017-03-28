<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_8162e324f6e8bfb137908f5729c55ae47fa8ba8615eb63d29456769a793a52d4 extends Twig_Template
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
        $__internal_dd6c016366fb73d854bcb04de8914d01c49534640279f05b1d60698be00ff3ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd6c016366fb73d854bcb04de8914d01c49534640279f05b1d60698be00ff3ef->enter($__internal_dd6c016366fb73d854bcb04de8914d01c49534640279f05b1d60698be00ff3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_4a0b4325a9cf04059c7bcb2bf0187c1007c82b99052271788c16952cadc884e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a0b4325a9cf04059c7bcb2bf0187c1007c82b99052271788c16952cadc884e7->enter($__internal_4a0b4325a9cf04059c7bcb2bf0187c1007c82b99052271788c16952cadc884e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_dd6c016366fb73d854bcb04de8914d01c49534640279f05b1d60698be00ff3ef->leave($__internal_dd6c016366fb73d854bcb04de8914d01c49534640279f05b1d60698be00ff3ef_prof);

        
        $__internal_4a0b4325a9cf04059c7bcb2bf0187c1007c82b99052271788c16952cadc884e7->leave($__internal_4a0b4325a9cf04059c7bcb2bf0187c1007c82b99052271788c16952cadc884e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
