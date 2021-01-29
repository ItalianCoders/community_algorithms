
def collatzSequence(n: int):
    seq = [n]
    while n > 1:
        if n % 2 :
            n = 3*n + 1
            seq.append(n)
        else:
            n = n//2
            seq.append(n)
    return seq

def mean(seq):
    return sum(seq) / len(seq)


def standard_deviation(seq):
    mu = mean(seq)
    for i in range(len(seq)):
        seq[i] = (seq[i] - mu)**2
    return int(sum(seq))
    
def generateListOfCollatzSequence(*n: int):
    sequenceGroup = [collatzSequence(x) for x in n]
    return sequenceGroup


def longestCollatzSequence(*n: int):
    longestcollatzSeqInGroup = max([collatzSequence(x) for x in n])
    return {"collatznumber"      : longestcollatzSeqInGroup[0],
            "longest sequence"   : longestcollatzSeqInGroup,
            "sequence sum"       : sum(longestcollatzSeqInGroup),
            "max number"         : max(longestcollatzSeqInGroup),
            "min number"         : min(longestcollatzSeqInGroup)
            }
