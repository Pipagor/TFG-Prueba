<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* buscador/mostrar/clases.html.twig */
class __TwigTemplate_f180c71ec7a6d86fc69ec1696e19b3c2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "buscador/mostrar/clases.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        yield "        <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/app.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bodygrid.css"), "html", null, true);
        yield "\">
";
        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "    <div class=\"grid-body\">
        <div class=\"L1\"></div>
        
        <div class=\"DC\">
            <div class='grid-clase'>
                <span class=\"V1\"> </span>
                <h1 class=\"N\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["clase"] ?? null), "nombre", [], "any", false, false, false, 13), "html", null, true);
        yield "</h1>
                <span class=\"V2\"> </span>
                <div class=\"H\"><b>Habilidades: </b> <p>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["clase"] ?? null), "HabilidadesAElegir", [], "any", false, false, false, 15), "html", null, true);
        yield "</p></div>
                <div class=\"C\"><b>Competencias: </b> <p>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["clase"] ?? null), "Competencias", [], "any", false, false, false, 16), "html", null, true);
        yield "</p></div>
                <div class=\"E\"><b>Equipo inicial: </b> <p>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["clase"] ?? null), "Equipamiento", [], "any", false, false, false, 17), "html", null, true);
        yield "</p></div>
                <div class=\"P\"><b>Puntos de golpe: </b> <p>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["clase"] ?? null), "PuntosDeGolpe", [], "any", false, false, false, 18), "html", null, true);
        yield "</p></div>
                <div class=\"S\"><b>Salvaciones: </b> <p>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["clase"] ?? null), "Salvaciones", [], "any", false, false, false, 19), "html", null, true);
        yield "</p></div>
                <div class=\"R\"><b>Requisitos: </b> <p>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["clase"] ?? null), "Requisitos", [], "any", false, false, false, 20), "html", null, true);
        yield "</p></div>
                <span class=\"espacio\"></span>
                <div  class=\"I\" ><img src=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["clase"] ?? null), "img", [], "any", false, false, false, 22), "html", null, true);
        yield "\"/></div>
            </div>
        </div>
        <div class=\"TP\" >
            <h1>Tabla de Progresión</h1>
            <table class=\"Progreso\">
            <tr>
                <th>Nivel</th>
                <th>Competencia</th>
                <th>Mejoras</th>
                ";
        // line 32
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["clase"] ?? null), "id", [], "any", false, false, false, 32) == 3)) {
            // line 33
            yield "                    <th>Despliegue Artístico</th>
                ";
        }
        // line 35
        yield "            </tr>
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tabla"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["linea"]) {
            // line 37
            yield "                    <tr>
                        <td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = $context["linea"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "html", null, true);
            yield "</td>
                        <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_1 = $context["linea"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null), "html", null, true);
            yield "</td>
                        <td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_2 = $context["linea"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[2] ?? null) : null), "html", null, true);
            yield "</td>
                        ";
            // line 41
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["clase"] ?? null), "id", [], "any", false, false, false, 41) == 3)) {
                // line 42
                yield "                            <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_3 = $context["linea"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[3] ?? null) : null), "html", null, true);
                yield "</td>
                        ";
            }
            // line 44
            yield "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "            </table>
        </div>
        <div class=\"RC\">
            <h1>Rasgos de Clase</h1>
            <div>
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rasgos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["habilidad"]) {
            // line 52
            yield "                    <div class=\"grid-rasgos\">
                        <span class=\"N\"><b>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "nombre", [], "any", false, false, false, 53), "html", null, true);
            yield "</b></span>
                        <span class=\"V1\"></span>
                        <span class=\"L\"><b><i>Nivel ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "OrigenNivel", [], "any", false, false, false, 55), "html", null, true);
            yield "</i></b></span>
                        <span class=\"D\">";
            // line 56
            $context["parraf"] = "";
            // line 57
            yield "                                        ";
            $context["buffer"] = 0;
            // line 58
            yield "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 58))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 59
                yield "                                            ";
                if ((($context["buffer"] ?? null) > 0)) {
                    // line 60
                    yield "                                                ";
                    $context["buffer"] = (($context["buffer"] ?? null) - 1);
                    // line 61
                    yield "                                            ";
                } elseif ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 61), $context["i"], 5) == "{|S|}")) {
                    // line 62
                    yield "                                                ";
                    $context["parraf"] = Twig\Extension\CoreExtension::join([($context["parraf"] ?? null), "
"]);
                    // line 63
                    yield "                                                ";
                    $context["buffer"] = 4;
                    // line 64
                    yield "                                            ";
                } elseif ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 64), $context["i"], 5) == "{|B|}")) {
                    // line 65
                    yield "                                                ";
                    yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["parraf"] ?? null), "html", null, true));
                    yield "
                                                ";
                    // line 66
                    $context["parraf"] = "";
                    // line 67
                    yield "                                                <b>
                                                ";
                    // line 68
                    $context["buffer"] = 4;
                    // line 69
                    yield "                                            ";
                } elseif ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 69), $context["i"], 5) == "{|I|}")) {
                    // line 70
                    yield "                                                ";
                    yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["parraf"] ?? null), "html", null, true));
                    yield "
                                                ";
                    // line 71
                    $context["parraf"] = "";
                    // line 72
                    yield "                                                <i>
                                                ";
                    // line 73
                    $context["buffer"] = 4;
                    // line 74
                    yield "                                            ";
                } elseif ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 74), $context["i"], 6) == "{|/B|}")) {
                    // line 75
                    yield "                                                ";
                    yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["parraf"] ?? null), "html", null, true));
                    yield "
                                                ";
                    // line 76
                    $context["parraf"] = "";
                    // line 77
                    yield "                                                </b>
                                                ";
                    // line 78
                    $context["buffer"] = 5;
                    // line 79
                    yield "                                            ";
                } elseif ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 79), $context["i"], 6) == "{|/I|}")) {
                    // line 80
                    yield "                                                ";
                    yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["parraf"] ?? null), "html", null, true));
                    yield "
                                                ";
                    // line 81
                    $context["parraf"] = "";
                    // line 82
                    yield "                                                </i>
                                                ";
                    // line 83
                    $context["buffer"] = 5;
                    // line 84
                    yield "                                            ";
                } else {
                    // line 85
                    yield "                                                ";
                    $context["parraf"] = Twig\Extension\CoreExtension::join([($context["parraf"] ?? null), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 85), $context["i"], 1)]);
                    // line 86
                    yield "                                            ";
                }
                // line 87
                yield "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            yield "                                        ";
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["parraf"] ?? null), "html", null, true));
            yield "
                        </span> 
                    </div><br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habilidad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "            </div>
        </div>
        <div class=\"SU\">
            <h1>Subclases</h1>
                <div class=\"listado\">
                    ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subclases"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subclase"]) {
            // line 98
            yield "                        <a class=\"elemento\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subclase", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["subclase"], "id", [], "any", false, false, false, 98)]), "html", null, true);
            yield "\">
                            <img class=\"I\" src=\"";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subclase"], "img", [], "any", false, false, false, 99), "html", null, true);
            yield "\">
                            <h2 class=\"N\">";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subclase"], "Nombre", [], "any", false, false, false, 100), "html", null, true);
            yield "</h2>
                            <span class=\"E\"></span>
                            <span class=\"S\"><b>Requisitos:</b> ";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subclase"], "Requisitos", [], "any", false, false, false, 102), "html", null, true);
            yield "</span>
                            <i class=\"A\">";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subclase"], "Autor", [], "any", false, false, false, 103), "html", null, true);
            yield "</i>
                            <span class=\"C\"></span>
                        </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclase'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        yield "                </div>
            </div>
        <div class=\"L2\"></div>
    </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "buscador/mostrar/clases.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  336 => 107,  326 => 103,  322 => 102,  317 => 100,  313 => 99,  308 => 98,  304 => 97,  297 => 92,  286 => 88,  280 => 87,  277 => 86,  274 => 85,  271 => 84,  269 => 83,  266 => 82,  264 => 81,  259 => 80,  256 => 79,  254 => 78,  251 => 77,  249 => 76,  244 => 75,  241 => 74,  239 => 73,  236 => 72,  234 => 71,  229 => 70,  226 => 69,  224 => 68,  221 => 67,  219 => 66,  214 => 65,  211 => 64,  208 => 63,  204 => 62,  201 => 61,  198 => 60,  195 => 59,  190 => 58,  187 => 57,  185 => 56,  181 => 55,  176 => 53,  173 => 52,  169 => 51,  162 => 46,  155 => 44,  149 => 42,  147 => 41,  143 => 40,  139 => 39,  135 => 38,  132 => 37,  128 => 36,  125 => 35,  121 => 33,  119 => 32,  106 => 22,  101 => 20,  97 => 19,  93 => 18,  89 => 17,  85 => 16,  81 => 15,  76 => 13,  68 => 7,  64 => 6,  57 => 4,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "buscador/mostrar/clases.html.twig", "C:\\Users\\alopa\\OneDrive\\Escritorio\\xampp2\\htdocs\\Symfony\\TFG\\templates\\buscador\\mostrar\\clases.html.twig");
    }
}
