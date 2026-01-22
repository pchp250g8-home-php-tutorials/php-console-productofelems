<?php
    system("cls");
    print("Input a count of elements in array:\r\n");
    $nElems = intval(chop(fgets(STDIN)));
    $iArray = array();
    srand();
    $nProduct = 1;
    for ($i = 0; $i < $nElems; $i++)
    {
        $nItem = rand(1,10);
        $iArray[] = $nItem;
    }
    print("Generated array:\r\n");
    for ($i = 0; $i < $nElems; $i++)
    {
        $nProduct *= $iArray[$i];
        printf("%d ", $iArray[$i]);
    }
    printf
    (
        "\r\nThe Product of %d elements of the array is:%d\r\n",
        $nElems, $nProduct
    );
    fgetc(STDIN);
?>