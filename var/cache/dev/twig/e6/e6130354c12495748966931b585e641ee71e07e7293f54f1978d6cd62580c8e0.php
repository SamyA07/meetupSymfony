<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_bec3b99b773591b13c990a763babc4d2b660792b571350ecebe5826a7668d62a extends Twig_Template
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
        $__internal_5dadfb72d48ba64f7bfb5201a85507ea26a0a44f811087df12128c2ca241d38e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dadfb72d48ba64f7bfb5201a85507ea26a0a44f811087df12128c2ca241d38e->enter($__internal_5dadfb72d48ba64f7bfb5201a85507ea26a0a44f811087df12128c2ca241d38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_f15430b06acdbdc676af8a18d46873382aa27af97e9dfaeb831781670637a04c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f15430b06acdbdc676af8a18d46873382aa27af97e9dfaeb831781670637a04c->enter($__internal_f15430b06acdbdc676af8a18d46873382aa27af97e9dfaeb831781670637a04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_5dadfb72d48ba64f7bfb5201a85507ea26a0a44f811087df12128c2ca241d38e->leave($__internal_5dadfb72d48ba64f7bfb5201a85507ea26a0a44f811087df12128c2ca241d38e_prof);

        
        $__internal_f15430b06acdbdc676af8a18d46873382aa27af97e9dfaeb831781670637a04c->leave($__internal_f15430b06acdbdc676af8a18d46873382aa27af97e9dfaeb831781670637a04c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
