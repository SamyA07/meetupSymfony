<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_9cd03f8e92a20222839339c8062a550262e29e4e256dac5911c0b58294292760 extends Twig_Template
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
        $__internal_1e84606f748e67ea691b0fe67ae9fe9f0b2bc348d11403d514c6f9d962adf1a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e84606f748e67ea691b0fe67ae9fe9f0b2bc348d11403d514c6f9d962adf1a6->enter($__internal_1e84606f748e67ea691b0fe67ae9fe9f0b2bc348d11403d514c6f9d962adf1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_97c0ff923cbd67111232ceed7ef166566c7e6e8db93fad751267d5f94d8c5318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c0ff923cbd67111232ceed7ef166566c7e6e8db93fad751267d5f94d8c5318->enter($__internal_97c0ff923cbd67111232ceed7ef166566c7e6e8db93fad751267d5f94d8c5318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_1e84606f748e67ea691b0fe67ae9fe9f0b2bc348d11403d514c6f9d962adf1a6->leave($__internal_1e84606f748e67ea691b0fe67ae9fe9f0b2bc348d11403d514c6f9d962adf1a6_prof);

        
        $__internal_97c0ff923cbd67111232ceed7ef166566c7e6e8db93fad751267d5f94d8c5318->leave($__internal_97c0ff923cbd67111232ceed7ef166566c7e6e8db93fad751267d5f94d8c5318_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
