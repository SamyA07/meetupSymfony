<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_22f3a65ee96c06e042ec1cd4ab29c8c36d728429225e3dcada3ecda10a89d83e extends Twig_Template
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
        $__internal_9415b1fa9da13ae5fd48bb517a15462a16a4f0cde16671ff1e21ab97a8282913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9415b1fa9da13ae5fd48bb517a15462a16a4f0cde16671ff1e21ab97a8282913->enter($__internal_9415b1fa9da13ae5fd48bb517a15462a16a4f0cde16671ff1e21ab97a8282913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_f95dbea541dc8bbcf9abcd1f07855cc8adf0115ef1eeb3758a4ce681843755ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95dbea541dc8bbcf9abcd1f07855cc8adf0115ef1eeb3758a4ce681843755ec->enter($__internal_f95dbea541dc8bbcf9abcd1f07855cc8adf0115ef1eeb3758a4ce681843755ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_9415b1fa9da13ae5fd48bb517a15462a16a4f0cde16671ff1e21ab97a8282913->leave($__internal_9415b1fa9da13ae5fd48bb517a15462a16a4f0cde16671ff1e21ab97a8282913_prof);

        
        $__internal_f95dbea541dc8bbcf9abcd1f07855cc8adf0115ef1eeb3758a4ce681843755ec->leave($__internal_f95dbea541dc8bbcf9abcd1f07855cc8adf0115ef1eeb3758a4ce681843755ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
