<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_8fb12636ea1a7232483bccf66a60a087e6582136a31e717cf10ac9f0fe95716b extends Twig_Template
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
        $__internal_db36c212465c44d047c7894225f0a670fbf5a646325ebe3dbbd2eed41a4a54f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db36c212465c44d047c7894225f0a670fbf5a646325ebe3dbbd2eed41a4a54f7->enter($__internal_db36c212465c44d047c7894225f0a670fbf5a646325ebe3dbbd2eed41a4a54f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_cd56bb5aae80a4ed3308bb7a3d245789b5cff4b6c15425295a92397a603f3030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd56bb5aae80a4ed3308bb7a3d245789b5cff4b6c15425295a92397a603f3030->enter($__internal_cd56bb5aae80a4ed3308bb7a3d245789b5cff4b6c15425295a92397a603f3030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_db36c212465c44d047c7894225f0a670fbf5a646325ebe3dbbd2eed41a4a54f7->leave($__internal_db36c212465c44d047c7894225f0a670fbf5a646325ebe3dbbd2eed41a4a54f7_prof);

        
        $__internal_cd56bb5aae80a4ed3308bb7a3d245789b5cff4b6c15425295a92397a603f3030->leave($__internal_cd56bb5aae80a4ed3308bb7a3d245789b5cff4b6c15425295a92397a603f3030_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
