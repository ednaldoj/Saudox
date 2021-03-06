<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnamneseGigantePsicopedaNeuroPsicomotoPt3 extends Model {
    protected $table = 'anamnese__pnp__pt3s';

    protected $fillable = [
            'tem_horarios',
            'e_lider',
            'aceita_bem_ordens',
            'faz_birras',
            'chora_com_frequencia',
            'de_que_forma_e_punido',
            'pratica_esportes_se_sim_quais',
            'apresenta_agressividade_apatia_ou_teimosia',
            'tem_algum_medo_se_sim_quais',
            'quais_as_brincadeiras_e_brinquedos_favoritos',
            'quem_cuidava_da_criança_ate_os_tres_anos',
            'quem_cuida_posteriormente',
            'como_a_crianca_se_comporta_sozinha',
            'como_a_crianca_se_comporta_em_familia',
            'como_a_crianca_se_comporta_com_outras_pessoas',
            'com_quem_ele_mais_gosta_de_ficar_e_por_que',
            'em_que_momento_a_crianca_encontra_a_familia',
            'que_tipos_de_perdas_ja_enfrentou_e_em_que_idade',
            'ja_houve_conflitos_familiares_e_a_crianca_presencia',
            'assiste_tv_em_demasia',
            'quais_programas_favoritos',
            'de_que_forma_o_pai_e_a_mae_se_relacionam_com_a_crianca',
            'em_que_horario_brincam_ou_fazem_alguma_atividade_de_lazer',
            'como_se_relaciona_com_irmaos',
            'como_se_relaciona_com_colegas_e_professores',

            'apresenta_curiosidade_sexual_se_sim_quando_comecou',
            'tipos_de_perguntas_fase_sexual',
            'fase_de_masturbacao',
            'atitude_da_família',

            'se_veste_so_a_partir_de_qual_idade',
            'se_abotoa_so_a_partir_de_qual_idade',
            'fecha_roupa_so_a_partir_de_qual_idade',
            'toma_banho_so_a_partir_de_qual_idade',
            'se_penteia_so_a_partir_de_qual_idade',
            'se_amarra_so_a_partir_de_qual_idade',
            'escova_os_dentes_so_a_partir_de_qual_idade',
            'come_so_a_partir_de_qual_idade',
            'se_calca_so_a_partir_de_qual_idade',

            'roi_unhas',
            'tem_tiques_nervosos_se_sim_quais',
            'alguma_mania_repetitiva_se_sim_qual',
            'tem_movimentos_ritmicos',
            'chupa_dedo_ou_bico',
            'temObjetoComoCheirinhoOuOutroParaDormirLevarParaEscolaSeSimQual',
            'outros_habitos',

            'como_a_familia_ve_o_problema',
            'como_o_casal_age_em_funcao_da_crianca',
            'comoOsPaisSeVeemPermissivosAutoritariosEquilibradosEPorque',
            'como_sao_colocados_os_limites_para_a_crianca_no_seu_cotidiano',
            'situacao_economica',
            'situacao_cultural',
            'le_quais_livros_com_que_frequência',
            'vai_ao_cinema_e_com_que_frequencia',
            'estimulo_cultural_se_sim_quais',
            'habitos_de_lazer',
            'constancia_de_dialogos',
            'fazem_refeicoes_juntos_se_sim_quais',
            'algum_vício_na_família_se_sim_quais',
            'estabelece_contato_visual_se_sim_em_quais_situacoes',
            'imitaAlgumGestoDeEmocaoFamiliaresPessoasProximasSeSimQuais',
            'imita_algum_som_especifico_se_sim_quais',
            'mostrase_sonolento_se_sim_com_qual_frequencia',
            'quando_estimulado_consegue_relembrar_de_situacoes_vivenciadas',
            'com_que_frequencia_ignora_estimulos',
            'com_que_frequencia_manipula_brinquedos_e_objetos',
            'ansioso_no_processo_de_mudanca_de_rotina_se_sim_voce_lembra',

            'analise_da_entrevista',
            'encaminhamentos',

    ];


    public static $regras_validacao = [
            'analise_da_entrevista' => 'required',
            'encaminhamentos' => 'required',
    ];


}
