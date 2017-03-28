<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b4189c65ce478f02648c856d42e2cc116789a3f4bf79bff053b3c51c6d303c06 extends Twig_Template
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
        $__internal_0e3e48dbfbc2b04ee4449499e9aafbc4347daaf3d0ad93ad417d08fe07572164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e3e48dbfbc2b04ee4449499e9aafbc4347daaf3d0ad93ad417d08fe07572164->enter($__internal_0e3e48dbfbc2b04ee4449499e9aafbc4347daaf3d0ad93ad417d08fe07572164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_85853c05d2e3bb0b37c612ba1ebeda3f0162711b5b5df9535abe22dcf93f79d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85853c05d2e3bb0b37c612ba1ebeda3f0162711b5b5df9535abe22dcf93f79d7->enter($__internal_85853c05d2e3bb0b37c612ba1ebeda3f0162711b5b5df9535abe22dcf93f79d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_0e3e48dbfbc2b04ee4449499e9aafbc4347daaf3d0ad93ad417d08fe07572164->leave($__internal_0e3e48dbfbc2b04ee4449499e9aafbc4347daaf3d0ad93ad417d08fe07572164_prof);

        
        $__internal_85853c05d2e3bb0b37c612ba1ebeda3f0162711b5b5df9535abe22dcf93f79d7->leave($__internal_85853c05d2e3bb0b37c612ba1ebeda3f0162711b5b5df9535abe22dcf93f79d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
