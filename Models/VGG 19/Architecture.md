# Architecture Overview

## VGG19

![VGG19](https://user-images.githubusercontent.com/22417910/159157712-f5e44774-7c05-460c-bb9d-526b37172999.png)

* VGGNet has 19 weight layers consisting of 16 convolutional layers, 3 fully connected layers and 5 max pooling layers
* The input to VGG is a 224*224 RGB image
* The convolution filters are always 3*3 with stride of 1
* The max-pool layer has a kernel size of 2*2 size and stride of 2

## Refrences
-[Medium](https://medium.com/analytics-vidhya/vggnet-architecture-explained-e5c7318aa5b6)

-[Research Gate](https://www.researchgate.net/figure/llustration-of-the-network-architecture-of-VGG-19-model-conv-means-convolution-FC-means_fig2_325137356)
