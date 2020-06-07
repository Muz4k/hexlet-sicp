<?php

return [
    'title' => "Матричные операции",
    'description' => [
        '1' =>
        "Предположим, что мы представляем векторы v = (vᵢ) как последовательности чисел, а матрицы m = (mᵢⱼ) как последовательности векторов (рядов матрицы). Например, матрица",
        '2' =>
        "представляется в виде последовательности ((1 2 3 4) (4 5 6 6) (6 7 8 9)). " .
        "Имея такое представление, мы можем использовать операции над последовательностями, чтобы кратко выразить основные действия над матрицами и векторами. " .
        "Эти операции (описанные в любой книге по матричной алгебре) следующие:",
        '3' =>
        "Скалярное произведение (dot-product v w) возвращает сумму ∑ᵢvᵢwᵢ;",
        '4' =>
        "Произведение матрицы и вектора (matrix-*-vector m v) возвращает вектор t, где tᵢ = ∑ⱼmᵢⱼvᵢ;",
        '5' =>
        "Произведение матриц (matrix-*-matrix m n) возвращает матрицу p, где pᵢⱼ = ∑ₖmᵢₖnₖⱼ",
        '6' =>
        "Транспозиция (transpose m) возвращает матрицу n, где nᵢⱼ = mⱼᵢ",
        '7' =>
        "Скалярное произведение мы можем определить так:",
        '8' =>
        "Заполните пропуски в следующих процедурах для вычисления остальных матричных операций. (Процедура accumulate-n описана в упражнении 2.36.)"
    ]
];