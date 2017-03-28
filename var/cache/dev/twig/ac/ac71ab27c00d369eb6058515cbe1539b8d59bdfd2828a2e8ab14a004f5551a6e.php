<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_072678389e64e61c64c964fa2734ebcfce4b1c5de5ca601e77b5fa356ed69db4 extends Twig_Template
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
        $__internal_00b8e619779c269d35c4ba78ec04566c20e27b318ce86af972ee5e4c602ca9a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00b8e619779c269d35c4ba78ec04566c20e27b318ce86af972ee5e4c602ca9a4->enter($__internal_00b8e619779c269d35c4ba78ec04566c20e27b318ce86af972ee5e4c602ca9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_ea6fece31b6028be596edb12757b77894c3bbff0deccf4e07bb5f1322f0027ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea6fece31b6028be596edb12757b77894c3bbff0deccf4e07bb5f1322f0027ac->enter($__internal_ea6fece31b6028be596edb12757b77894c3bbff0deccf4e07bb5f1322f0027ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_00b8e619779c269d35c4ba78ec04566c20e27b318ce86af972ee5e4c602ca9a4->leave($__internal_00b8e619779c269d35c4ba78ec04566c20e27b318ce86af972ee5e4c602ca9a4_prof);

        
        $__internal_ea6fece31b6028be596edb12757b77894c3bbff0deccf4e07bb5f1322f0027ac->leave($__internal_ea6fece31b6028be596edb12757b77894c3bbff0deccf4e07bb5f1322f0027ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
